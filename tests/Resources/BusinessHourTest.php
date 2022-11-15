<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\BusinessHour;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Business Hour resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class BusinessHourTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = BusinessHour::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
