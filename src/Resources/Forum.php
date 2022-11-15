<?php

namespace DiagVN\Freshdesk\Resources;

use DiagVN\Freshdesk\Resources\Traits\AllTrait;
use DiagVN\Freshdesk\Resources\Traits\DeleteTrait;
use DiagVN\Freshdesk\Resources\Traits\MonitorTrait;
use DiagVN\Freshdesk\Resources\Traits\UpdateTrait;
use DiagVN\Freshdesk\Resources\Traits\ViewTrait;

class Forum extends AbstractResource
{

    use AllTrait, ViewTrait, UpdateTrait, DeleteTrait, MonitorTrait;

    /**
     * The forums resource endpoint
     *
     * @var string
     * @internal
     */
    protected $endpoint = '/discussions/forums';

    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     */
    protected $categoryEndpoint = '/discussions/categories';

    /**
     * Creates the category endpoint (for creating forums)
     *
     * @param integer $id
     * @return string
     * @internal
     */
    private function categoryEndpoint($id = null)
    {
        return $id === null ? $this->categoryEndpoint : $this->categoryEndpoint . '/' . $id;
    }

    /**
     *
     * Create a forum for a category.
     *
     * @param int $id The category Id
     * @param array $data
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
    public function create($id, array $data)
    {
        return $this->api()->request('POST', $this->categoryEndpoint($id), $data);
    }
}
