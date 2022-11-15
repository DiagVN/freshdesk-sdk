<?php

namespace DiagVN\Freshdesk\Resources;

use DiagVN\Freshdesk\Resources\Traits\AllTrait;
use DiagVN\Freshdesk\Resources\Traits\CreateTrait;
use DiagVN\Freshdesk\Resources\Traits\DeleteTrait;
use DiagVN\Freshdesk\Resources\Traits\UpdateTrait;
use DiagVN\Freshdesk\Resources\Traits\ViewTrait;

class Category extends AbstractResource
{

    use AllTrait, CreateTrait, ViewTrait, UpdateTrait, DeleteTrait;

    /**
     * The resource endpoint
     *
     * @internal
     * @var string
     *
     */
    protected $endpoint = '/discussions/categories';

}
