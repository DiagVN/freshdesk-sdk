<?php

namespace DiagVN\Freshdesk\Resources;

use DiagVN\Freshdesk\Resources\Traits\AllTrait;
use DiagVN\Freshdesk\Resources\Traits\ViewTrait;

class Product extends AbstractResource
{

    use AllTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     *
     */
    protected $endpoint = '/products';
}
