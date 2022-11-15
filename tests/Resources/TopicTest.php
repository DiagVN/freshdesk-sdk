<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\Forum;
use DiagVN\Freshdesk\Resources\Topic;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Topic resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class TopicTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Topic::class;
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
