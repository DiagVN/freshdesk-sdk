<?php

namespace DiagVN\Freshdesk\Resources;

use DiagVN\Freshdesk\Resources\Traits\AllTrait;
use DiagVN\Freshdesk\Resources\Traits\CreateTrait;
use DiagVN\Freshdesk\Resources\Traits\ViewTrait;

class Agent extends AbstractResource
{

    use AllTrait, CreateTrait, ViewTrait;

    /**
     * The resource endpoint
     * @internal
     * @var string
     */
    protected $endpoint = '/agents';

    /**
     *
     * Get the currently authenticated agent
     *
     * @api
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
    public function current(array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint('me'), null, $query);
    }
}
