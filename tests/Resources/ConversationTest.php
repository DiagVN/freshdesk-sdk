<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\Conversation;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Conversation resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ConversationTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Conversation::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['reply'],
            ['note'],
            ['update'],
            ['delete'],
        ];
    }
}
