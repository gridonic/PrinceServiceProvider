<?php

/*
 * This file is part of the PrinceServiceProvider.
 *
 * (c) Gridonic <hello@gridonic.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gridonic\Silex\Tests;

use Silex\Application;
use Gridonic\Silex\PrinceServiceProvider;

/**
 * Tests for the Silex ServiceProvider for the PrinceXML PHP 5 wrapper
 *
 * @author Peter Siska <pesche@gridonic.ch>
 */
class PrinceServiceProviderTest extends \PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        if (!is_dir(__DIR__.'/../../../../vendor/gridonic/princexml-php/src')) {
            $this->markTestSkipped('PrinceXMLPhp dependency was not installed.');
        }
    }

    public function testRegister() {
        $app = new Application();
        $app->register(new PrinceServiceProvider());

        $this->assertInstanceOf('PrinceXMLPhp\PrinceWrapper', $app['prince']);
    }
}