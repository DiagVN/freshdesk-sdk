<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\Category;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Category resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class CategoryTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Category::class;
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
