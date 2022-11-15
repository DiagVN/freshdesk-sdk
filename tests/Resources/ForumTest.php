<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\Forum;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Form resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ForumTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Forum::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['all'],
            ['view'],
            ['update'],
            ['delete'],
            ['monitor'],
            ['unmonitor'],
            ['monitorStatus'],
        ];
    }
}
