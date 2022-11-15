<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\tests\TestCase;
use DiagVN\Freshdesk\Resources\Company;


/**
 * Company resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class CompanyApiTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = Company::class;
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
        ];
    }
}
