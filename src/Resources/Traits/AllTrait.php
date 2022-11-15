<?php

namespace DiagVN\Freshdesk\Resources\Traits;

use DiagVN\Freshdesk\Api;

trait AllTrait
{

    /**
     * @param null $end string
     * @return string
     * @internal
     */
    abstract protected function endpoint($end = null);

    /**
     * @return Api
     * @internal
     */
    abstract protected function api();

    /**
     * Get a list of all agents.
     *
     * Use filters ($query) to view only specific resources (those which match the criteria that you choose).
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
    public function all(array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint(), null, $query);
    }
}
