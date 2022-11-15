<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\SLAPolicy;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * SLA Policy resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class SLAPolicytest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = SLAPolicy::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
