# RouterPHP

[![indonesiamessage](https://img.shields.io/badge/FROM-INDONESIA%20WITH%20LOVE-red?style=for-the-badge&labelColor=f66767&color=f0134d)](https://github.com/IzyanzZ/RouterPHP)

This is project router using PHP

My Github : [IzyanzZ](github.com/IzyanzZ)

### Tutorial

This is example of using RouterPHP

```php
<?php

require_once __DIR__ "vendor/autoload.php";

use IzyanzZ\Router;

$route = new Router();

// Get Method

$route->get("/", function() {
  echo "Hello, World!";
});

// Post Method

$route->post("/", function() {
  echo "Hello, World!";
});

$route->run();

```
