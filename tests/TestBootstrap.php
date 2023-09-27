<?php declare(strict_types=1);

use Shopware\Core\TestBootstrapper;

$loader = (new TestBootstrapper())
    ->addCallingPlugin()
    ->addActivePlugins('BlogPost')
    ->bootstrap()
    ->getClassLoader();

$loader->addPsr4('BlogPost\\Tests\\', __DIR__);