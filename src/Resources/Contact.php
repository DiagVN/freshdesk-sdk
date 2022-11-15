<?php

namespace DiagVN\Freshdesk\Resources;

use DiagVN\Freshdesk\Resources\Traits\AllTrait;
use DiagVN\Freshdesk\Resources\Traits\CreateTrait;
use DiagVN\Freshdesk\Resources\Traits\DeleteTrait;
use DiagVN\Freshdesk\Resources\Traits\UpdateTrait;
use DiagVN\Freshdesk\Resources\Traits\ViewTrait;

class Contact extends AbstractResource
{
    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     */
    protected $endpoint = '/contacts';

    /**
     * List contact fields
     *
     * The agent whose credentials (API key or username/password) are being used to make this API call should be
     * authorised to view the contact fields
     *
     * @param array|null $query
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     * @api
     */
    public function fields(array $query = null)
    {
        return $this->api()->request('GET', '/contact_fields', null, $query);
    }

    /**
     * Convert a contact into an agent
     *
     * Note:
     * 1. The contact must have an email address in order to be converted into an agent.
     * 2. If your account has already reached the maximum number of agents, the API request will fail with HTTP error code 403
     * 3. The agent whose credentials (API key, username and password) were used to make this API call should be authorised to convert a contact into an agent
     *
     * @param int $id The agent id
     * @param array|null $query
     * @return array|null
     * @throws \Freshdesk\Exceptions\AccessDeniedException
     * @throws \Freshdesk\Exceptions\ApiException
     * @throws \Freshdesk\Exceptions\AuthenticationException
     * @throws \Freshdesk\Exceptions\ConflictingStateException
     * @throws \Freshdesk\Exceptions\NotFoundException
     * @throws \Freshdesk\Exceptions\RateLimitExceededException
     * @throws \Freshdesk\Exceptions\UnsupportedContentTypeException
     * @throws \Freshdesk\Exceptions\MethodNotAllowedException
     * @throws \Freshdesk\Exceptions\UnsupportedAcceptHeaderException
     * @throws \Freshdesk\Exceptions\ValidationException
     */
    public function makeAgent($id, array $query = null)
    {
        $end = $id . '/make_agent';

        return $this->api()->request('GET', $this->endpoint($end), null, $query);
    }
}
