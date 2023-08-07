<?php

namespace Core;

class Container
{
    protected $bindings = [];

    // public function add()
    public function bind($key, $resolver)
    {
        $this->bindings[$key] = $resolver;
    }

    // public function remove()
    public function resolve($key)
    {
        if (! array_key_exists($key, $this->bindings)) {
            // throw new \Exception('No matching binding found for ' . $key);
            throw new \Exception("No matching binding found for {$key}");
        }
      
        $resolver = $this->bindings[$key];

        return call_user_func($resolver);
        
    }
}