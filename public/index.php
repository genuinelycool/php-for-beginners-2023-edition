<?php

const BASE_PATH = __DIR__ . '/../';

//require BASE_PATH . 'functions.php';
require BASE_PATH . 'Core/functions.php';

// spl_autoload_register(function ($class) {
//     // dd($class);
//     require base_path("Core/{$class}.php");
//     // var_dump(base_path($class . '.php'));
//     // dd(base_path($class . '.php'));
// });

spl_autoload_register(function ($class) {
    // dd($class);
    // dd(DIRECTORY_SEPARATOR);
    // Core\Database
    // $result = str_replace('\\', DIRECTORY_SEPARATOR, $class);   //linux, forword slash. windows back slash.
    $class = str_replace('\\', DIRECTORY_SEPARATOR, $class);
    // $result = str_replace('\\', '/', $class);    

    // dd($result);

    // require base_path("Core/{$class}.php");
    // require base_path("{$result}.php");
    require base_path("{$class}.php");
});

// require base_path('Database.php');
// require base_path('Response.php');
// require base_path('router.php');
// require base_path('Core/router.php');

$router = new \Core\Router();

$routes = require base_path('routes.php');
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// $method = $_SERVER['REQUEST_METHOD'];
// $method = isset($_POST['_method']) ? $_POST['_method'] : $_SERVER['REQUEST_METHOD'];
$method = $_POST['_method'] ?? $_SERVER['REQUEST_METHOD'];

// routeToController($uri, $routes);
$router->route($uri, $method);
