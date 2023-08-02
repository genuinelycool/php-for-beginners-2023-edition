<?php

use Core\Response;

function dd($value)
{
    echo "<pre>";
    var_dump($value);
    echo "</pre>";

    die();
}

function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value;
}

function abort($code = 404) 
{
    http_response_code($code);

    require base_path("views/{$code}.php");

    die();
}

function authorize($condition, $status = Response::FORBIDDEN) {
    if (! $condition) {
        abort($status);
    }
}

// helper function no. 1
function base_path($path)
{
    return BASE_PATH . $path;
}

// helper function no. 2
function view($path, $attributes = [])
{
    extract($attributes);   // extract()  it accepts an array, and it turns that array into a set of variables, where name of the variable is the key, 
                            // and the value of the variable is the value associated with the key.

    require base_path('views/' . $path);
}