<?php
namespace DiagVN\Freshdesk\tests\Resources;

use DiagVN\Freshdesk\Resources\EmailConfig;
use DiagVN\Freshdesk\tests\TestCase;

/**
 * Email Config resource tests
 *
 * @author Matthew Clarkson <mpclarkson@gmail.com>
 */
class EmailConfigTest extends TestCase
{
    public function setUp()
    {
        parent::setUp();

        $this->class = EmailConfig::class;
    }

    public function methodsThatShouldExist()
    {
        return [
            ['all'],
            ['view'],
        ];
    }
}
