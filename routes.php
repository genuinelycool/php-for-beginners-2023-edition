<?php

// return [
//     '/' => 'controllers/index.php',
//     '/about' => 'controllers/about.php',
//     '/notes' => 'controllers/notes/index.php',
//     '/note' => 'controllers/notes/show.php',
//     '/notes/create' => 'controllers/notes/create.php',
//     '/contact' => 'controllers/contact.php'
// ];

// return [
//     [
//         'uri' => '/',
//         'controller' => 'controller/index.php',
//         'method' => 'GET',

//     ],

//     [
//         'uri' => '/',
//         'controller' => 'controller/index.php',
//         'method' => 'GET',
        
//     ]
// ];

$router->get('/', 'controllers/index.php');
$router->get('/about', 'controllers/about.php');
$router->get('/contact', 'controllers/contact.php');

$router->get('/notes', 'controllers/notes/index.php');
$router->get('/note', 'controllers/notes/show.php');
$router->get('/notes/create', 'controllers/notes/create.php');

// $router->delete('/note', 'controllers/notes/destroy.php');

// dd($router->routes);