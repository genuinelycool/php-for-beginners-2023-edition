<?php

use Core\App;
use Core\Database;
use Core\Container;

$container = new Container();

$container->bind('Core\Database', function () {
    $config = require base_path('config.php');

    return new Database($config['database']);
});

// $db = $container->resolve('Core\Database');

// dd($db);
// $container->resolve('adafdfdsdsfdfa12');

App::setContainer($container);