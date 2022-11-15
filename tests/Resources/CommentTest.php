<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\Comment;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Topic resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class CommentTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Comment::class;
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
