<?php

namespace DiagVN\Freshdesk\Resources\Traits;

use DiagVN\Freshdesk\Api;

trait DeleteTrait
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
     * Delete a resource
     *
     * Delete a resource by $id
     *
     * @api
     * @param in $id The resource id
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
    public function delete($id)
    {
        return $this->api()->request('DELETE', $this->endpoint($id));
    }
}
