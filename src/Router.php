<?php

namespace Izyanz;

error_reporting(0);

class Router
{
    public $route;

    public function __construct() {}

    public function get($action, $callback)
    {
        $this->route['get'][$action] = $callback;
    }

    public function post($action, $callback)
    {
        $this->route['post'][$action] = $callback;
    }

    public function run()
    {
        $action = $_SERVER['REQUEST_URI'];
        $method = $_SERVER['REQUEST_METHOD'];
        $method = strtolower($method);

        $callback = $this->route[$method][$action];

        if (!$callback) { http_response_code(404); echo "<h1>ERROR : URL Not Found!</h1>"; }

        echo call_user_func($callback);
    }
}