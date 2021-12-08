<?php

require_once __DIR__ . "/../vendor/autoload.php";

use Izyanz\Router;

$route = new Router();

$route->get("/", function() {
    echo "Hello";
});

$route->run();