<?php

namespace DiagVN\Freshdesk\tests\Exception;

use DiagVN\Freshdesk\Exceptions\ApiException;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Api tests
 *
 * @package Freshdesk
 * @category Freshdesk
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class ApiExceptionTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = ApiException::class;
    } 

    public function methodsThatShouldExist()
    {
        return [
            ['create'],
            ['getRequestException'],
        ];
    }
}
