<?php

namespace DiagVN\Freshdesk\Resources\Traits;

use DiagVN\Freshdesk\Api;

trait CreateTrait
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
     * Create a resource
     *
     * Create a resource with the supplied data
     *
     * @param array $data The data
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
    public function create(array $data)
    {
        return $this->api()->request('POST', $this->endpoint(), $data);
    }
}
