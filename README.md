PrinceServiceProvider
=====================

A PrinceXML ServiceProvider for Silex.

Requirements
------------

This ServiceProvider works with the PrinceXML PHP wrapper provided by YesLogic Pty. Ltd.
and depends on the executable distributed on the [product website](http://www.princexml.com/download).

Installation
------------

The recommended way to install PrinceServiceProvider is through [composer](http://packagist.org).

Just create a composer.json file for your project:

```JSON
{
    "require": {
        "gridonic/prince-service-provider": "*"
    }
}
```

And run these two commands to install it:

    $ wget http://getcomposer.org/composer.phar
    $ php composer.phar install

Now you can add the autoloader, and you will have access to the library:

```php
<?php
require 'vendor/autoload.php';
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
