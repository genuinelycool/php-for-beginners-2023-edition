<?php

namespace Core;

class Router {
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => $method
        ];

        // $this->routes[] = compact('method', 'uri', 'controller');   // opposite of extract()
    }

    public function get($uri, $controller)
    {
        $this->add('GET', $uri, $controller);
        // $this->routes[] = [
        //     'uri' => $uri,
        //     'controller' => $controller,
        //     'method' => 'GET'
        // ];
    }

    public function post($uri, $controller)
    {
        $this->add('POST', $uri, $controller);

        // $this->routes[] = [
        //     'uri' => $uri,
        //     'controller' => $controller,
        //     'method' => 'POST'
        // ];
    }

    public function delete($uri, $controller)
    {
        $this->add('DELETE', $uri, $controller);

        // $this->routes[] = [
        //     'uri' => $uri,
        //     'controller' => $controller,
        //     'method' => 'DELETE'
        // ];
    }

    public function patch($uri, $controller)
    {
        $this->add('PATCH', $uri, $controller);

        // $this->routes[] = [
        //     'uri' => $uri,
        //     'controller' => $controller,
        //     'method' => 'PATCH'
        // ];
    }

    public function put($uri, $controller)
    {
        $this->add('PUT', $uri, $controller);

        // $this->routes[] = [
        //     'uri' => $uri,
        //     'controller' => $controller,
        //     'method' => 'PUT'
        // ];
    }

    public function route($uri, $method) 
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] === $uri && $route['method'] === strtoupper($method) ) {
                return require base_path($route['controller']);
            }
        }

        $this->abort();
    }

    protected function abort($code = 404) 
    {
        http_response_code($code);

        require base_path("views/{$code}.php");

        die();
    }
}

// // $routes = require('routes.php');
// $routes = require base_path('routes.php');

// function routeToController($uri, $routes) {
//     if (array_key_exists($uri, $routes)) {
//         require base_path($routes[$uri]);
//     } else {
//         abort();
//     }
// }

// function abort($code = 404) {
//     http_response_code($code);

//     require base_path("views/{$code}.php");

//     die();
// }


// $routes = require base_path('routes.php');
// $uri = parse_url($_SERVER['REQUEST_URI'])['path'];

// routeToController($uri, $routes);