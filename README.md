PrinceServiceProvider
=====================

[![Build Status](https://travis-ci.org/gridonic/PrinceServiceProvider.png?branch=master)](https://travis-ci.org/gridonic/PrinceServiceProvider)

A PrinceXML ServiceProvider for Silex.

Requirements
------------

This ServiceProvider works with the PrinceXML PHP wrapper provided by YesLogic Pty. Ltd.
and depends on the executable distributed on the [product website](http://www.princexml.com/download). Internally, it uses a [PSR-0 conform wrapper](https://github.com/gridonic/PrinceXMLPhp) distributed as a composer package.

Installation
------------

The recommended way to install PrinceServiceProvider is through [composer](http://packagist.org).

```bash
composer require gridonic/prince-service-provider
```

Usage
-----

```php
<?php
$app->register(new PrinceServiceProvider, array(
    'prince.binary' => '/usr/local/bin/prince'
));

$app['prince']->convert_file($xmlPath, $msgs = array());
```

For more information about the prince library, please read the documentation provided
in the original [PHP wrapper distribution](http://www.princexml.com/download/wrappers).
