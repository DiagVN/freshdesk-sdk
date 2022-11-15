<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\tests\TestCase;
use DiagVN\Freshdesk\Resources\Group;

/**
 * Agent Api tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class GroupApiTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Group::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
        ];
    }
}
