<?php

namespace DiagVN\Freshdesk\Resources\Traits;

use DiagVN\Freshdesk\Api;

trait UpdateTrait
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
     * Update a resource
     *
     * Updates the resources for the given $id with the supplied data/.
     *
     * @api
     * @param int $id The resource id
     * @param array $data The data
     * @return array|null
     */
    public function update($id, array $data)
    {
        return $this->api()->request('PUT', $this->endpoint($id), $data);
    }
}
