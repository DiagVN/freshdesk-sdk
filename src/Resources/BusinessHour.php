<?php

namespace DiagVN\Freshdesk\Resources;

use DiagVN\Freshdesk\Resources\Traits\AllTrait;
use DiagVN\Freshdesk\Resources\Traits\ViewTrait;

/**
 * Business Hour resource
 *
 * This provides access to the business hour resources
 *
 * @package Api\Resources
 */
class BusinessHour extends AbstractResource
{

    use AllTrait, ViewTrait;

    /**
     * The resource endpoint
     *
     * @var string
     * @internal
     */
    protected $endpoint = '/business_hours';
}
