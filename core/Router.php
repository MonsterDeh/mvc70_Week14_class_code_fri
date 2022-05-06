<?php

namespace Core;

class Router {
    private array $routes = [];

    public function get($path, $callback) 
    {
        $this->routes['get'][$path] = $callback;
    }

    public function post($path, $callback)
    {
        $this->routes['post'][$path] = $callback;
    }

    public function resolve() 
    {
        $method = strtolower($_SERVER['REQUEST_METHOD']);
        $uri = $_SERVER['REQUEST_URI'];

        $callback = $this->routes[$method][$uri] ?? null;

        if (is_null($callback)) {
            die("page not found 404");
            // exit;
        }

        if (is_array($callback)) {
            $callback[0] = new $callback[0];
        }

        call_user_func($callback);
    }
}