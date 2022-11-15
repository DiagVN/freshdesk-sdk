<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\Product;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Product resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ProductTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Product::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
