<?php

namespace DiagVN\Freshdesk\Resources\Traits;

use DiagVN\Freshdesk\Api;

trait ViewTrait
{
    /**
     * @param integer $end string
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
     * View a resource
     *
     * Use 'include' to embed additional details in the response. Each include will consume an additional credit.
     * For example if you embed the requester and company information you will be charged a total of 3 API credits for the call.
     * See Freshdesk's documentation for details.
     *
     * @api
     * @param int $id The resource id
     * @param array|null $query
     * @return array|null
     */
    public function view($id, array $query = null)
    {
        return $this->api()->request('GET', $this->endpoint($id), null, $query);
    }
}
