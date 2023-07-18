<?php

// $uri = $_SERVER['REQUEST_URI'];
$uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// dd($uri);
// string(8) "/contact"
// dd(parse_url($uri));

// if ($uri === '/') {
//     require 'controllers/index.php';
// } else if ($uri === '/about') {
//     require 'controllers/about.php';
// } else if ($uri === '/contact') {
//     require 'controllers/contact.php';
// }

$routes = [
    '/' => 'controllers/index.php',
    '/about' => 'controllers/about.php',
    '/contact' => 'controllers/contact.php'
];

// dd($routes['/about']);
// dd($routes[$uri]);
// string(23) "controllers/contact.php"


function routeToController($uri, $routes) {
    if (array_key_exists($uri, $routes)) {
        require $routes[$uri];
    } else {
        abort();
    }
}

function abort($code = 404) {
    http_response_code($code);

    // echo "Sorry. Not Found";
    require "views/{$code}.php";

    die();
}

routeToController($uri, $routes);