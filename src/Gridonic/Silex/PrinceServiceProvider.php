<?php

/*
 * This file is part of the PrinceServiceProvider.
 *
 * (c) Gridonic <hello@gridonic.ch>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Gridonic\Silex;

use Silex\Application;
use Silex\ServiceProviderInterface;

/**
 * Silex ServiceProvider for the PrinceXML PHP 5 wrapper
 *
 * @author Peter Siska <pesche@gridonic.ch>
 */
class PrinceServiceProvider implements ServiceProviderInterface
{
    public function register(Application $app)
    {
        $app['prince'] = $app->share(function ($app) {
            return new PrinceWrapper(
                isset($app['prince.binary']) ? $app['prince.binary'] : '/usr/local/bin/prince'
            );
        });
    }

    public function boot(Application $app)
    {
    }
}