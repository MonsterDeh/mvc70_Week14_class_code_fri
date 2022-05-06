<?php

namespace Core;

class Application {
    private $router;

    public function __construct()
    {
        $this->router = new Router;
    }

    public function get($path, $callback)
    {
        $this->router->get($path, $callback);
    }

    public function post($path, $callback)
    {
        $this->router->post($path, $callback);
    }

    public function run() 
    {
        $this->router->resolve();
        
    }

}