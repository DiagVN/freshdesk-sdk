<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\tests\TestCase;
use DiagVN\Freshdesk\Resources\Ticket;

/**
 * Ticket Api tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class TicketApiTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Ticket::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
            ['fields'],
            ['restore'],
            ['fields'],
            ['conversations'],
            ['timeEntries'],
            ['search']
        ];
    }

}
