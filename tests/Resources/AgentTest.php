<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\tests\TestCase;
use DiagVN\Freshdesk\Resources\Agent;

/**
 * Agent resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class AgentTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();
        $this->class = Agent::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
            ['current'],
        ];
    }
}
