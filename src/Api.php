<?php

namespace DiagVN\Freshdesk;

use DiagVN\Freshdesk\Exceptions\AccessDeniedException;
use DiagVN\Freshdesk\Exceptions\ApiException;
use DiagVN\Freshdesk\Exceptions\AuthenticationException;
use DiagVN\Freshdesk\Exceptions\ConflictingStateException;
use DiagVN\Freshdesk\Exceptions\RateLimitExceededException;
use DiagVN\Freshdesk\Exceptions\UnsupportedContentTypeException;
use DiagVN\Freshdesk\Resources\Agent;
use DiagVN\Freshdesk\Resources\BusinessHour;
use DiagVN\Freshdesk\Resources\Category;
use DiagVN\Freshdesk\Resources\Comment;
use DiagVN\Freshdesk\Resources\Company;
use DiagVN\Freshdesk\Resources\Contact;
use DiagVN\Freshdesk\Resources\Conversation;
use DiagVN\Freshdesk\Resources\EmailConfig;
use DiagVN\Freshdesk\Resources\Forum;
use DiagVN\Freshdesk\Resources\Group;
use DiagVN\Freshdesk\Resources\Product;
use DiagVN\Freshdesk\Resources\SLAPolicy;
use DiagVN\Freshdesk\Resources\Ticket;
use DiagVN\Freshdesk\Resources\TimeEntry;
use DiagVN\Freshdesk\Resources\Topic;
use GuzzleHttp\Client;
use GuzzleHttp\Exception\RequestException;

class Api
{
    /**
     * Agent resources
     *
     * @api
     * @var Agent
     */
    public $agents;

    /**
     * Company resources
     *
     * @api
     * @var Company
     */
    public $companies;

    /**
     * Contact resources
     *
     * @api
     * @var Contact
     */
    public $contacts;

    /**
     * Group resources
     *
     * @api
     * @var Group
     */
    public $groups;

    /**
     * Ticket resources
     *
     * @api
     * @var Ticket
     */
    public $tickets;

    /**
     * TimeEntry resources
     *
     * @api
     * @var TimeEntry
     */
    public $timeEntries;

    /**
     * Conversation resources
     *
     * @api
     * @var Conversation
     */
    public $conversations;

    /**
     * Category resources
     *
     * @api
     * @var Category
     */
    public $categories;

    /**
     * Forum resources
     *
     * @api
     * @var Forum
     */
    public $forums;

    /**
     * Topic resources
     *
     * @api
     * @var Topic
     */
    public $topics;

    /**
     * Comment resources
     *
     * @api
     * @var Comment
     */
    public $comments;

    //Admin

    /**
     * Email Config resources
     *
     * @api
     * @var EmailConfig
     */
    public $emailConfigs;

    /**
     * Access Product resources
     *
     * @api
     * @var Product
     */
    public $products;

    /**
     * Business Hours resources
     *
     * @api
     * @var BusinessHour
     */
    public $businessHours;

    /**
     * SLA Policy resources
     *
     * @api
     * @var SLAPolicy
     */
    public $slaPolicies;

    /**
     * @internal
     * @var Client
     */
    protected $client;

    /**
     * @internal
     * @var string
     */
    private $baseUrl;

    /**
     * Constructs a new api instance
     *
     * @param string $apiKey
     * @param string $domain
     * @throws Exceptions\InvalidConfigurationException
     * @api
     */
    public function __construct($apiKey, $domain)
    {
        $this->validateConstructorArgs($apiKey, $domain);

        $this->baseUrl = sprintf('https://%s.freshdesk.com/api/v2', $domain);

        $this->client = new Client([
                'auth' => [$apiKey, 'X'],
            ]
        );

        $this->setupResources();
    }


    /**
     * Internal method for handling requests
     *
     * @param $method
     * @param $endpoint
     * @param array|null $data
     * @param array|null $query
     * @return mixed|null
     * @throws ApiException
     * @throws ConflictingStateException
     * @throws RateLimitExceededException
     * @throws UnsupportedContentTypeException
     * @internal
     */
    public function request($method, $endpoint, array $data = null, array $query = null)
    {

        if (isset($data['attachments'])) {
            // Has file attachments, so we can't use the json property.
            // Instead, we have to use the "multipart" property
            $attachments = $data['attachments'];
            unset($data['attachments']);

            if (!is_array($attachments)) {
                $attachments = [$attachments];
            }

            $multiparts = [];
            foreach ($attachments as $attachment) {
                $multiparts[] = [
                    'name' => 'attachments[]',
                    'contents' => $attachment, // $attachment is a resource from fopen('/path/to/file', 'r')
                ];
            }
            foreach ($data as $key => $value) {
                $multiparts[] = [
                    'name' => $key,
                    'contents' => $value,
                ];
            }

            $options = [
                'multipart' => $multiparts,
            ];
        } else {
            // normal method
            $options = [
                'json' => $data,
            ];
        }

        if (isset($query)) {
            $options['query'] = $query;
        }

        $url = $this->baseUrl . $endpoint;

        return $this->performRequest($method, $url, $options);
    }

    /**
     * Performs the request
     *
     * @param $method
     * @param $url
     * @param $options
     * @return mixed|null
     * @throws AccessDeniedException
     * @throws ApiException
     * @throws AuthenticationException
     * @throws ConflictingStateException
     * @internal
     *
     */
    private function performRequest($method, $url, $options)
    {

        try {
            switch ($method) {
                case 'GET':
                    return json_decode($this->client->get($url, $options)->getBody(), true);
                case 'POST':
                    return json_decode($this->client->post($url, $options)->getBody(), true);
                case 'PUT':
                    return json_decode($this->client->put($url, $options)->getBody(), true);
                case 'DELETE':
                    return json_decode($this->client->delete($url, $options)->getBody(), true);
                default:
                    return null;
            }
        } catch (RequestException $e) {
            throw ApiException::create($e);
        }
    }


    /**
     * @param $apiKey
     * @param $domain
     * @throws Exceptions\InvalidConfigurationException
     * @internal
     *
     */
    private function validateConstructorArgs($apiKey, $domain)
    {
        if (!isset($apiKey)) {
            throw new Exceptions\InvalidConfigurationException("API key is empty.");
        }

        if (!isset($domain)) {
            throw new Exceptions\InvalidConfigurationException("Domain is empty.");
        }
    }

    /**
     * @internal
     */
    private function setupResources()
    {
        //People
        $this->agents = new Agent($this);
        $this->companies = new Company($this);
        $this->contacts = new Contact($this);
        $this->groups = new Group($this);

        //Tickets
        $this->tickets = new Ticket($this);
        $this->timeEntries = new TimeEntry($this);
        $this->conversations = new Conversation($this);

        //Discussions
        $this->categories = new Category($this);
        $this->forums = new Forum($this);
        $this->topics = new Topic($this);
        $this->comments = new Comment($this);

        //Admin
        $this->products = new Product($this);
        $this->emailConfigs = new EmailConfig($this);
        $this->slaPolicies = new SLAPolicy($this);
        $this->businessHours = new BusinessHour($this);
    }
}
