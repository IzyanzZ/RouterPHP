# RouterPHP

[![indonesiamessage](https://img.shields.io/badge/FROM-INDONESIA%20WITH%20LOVE-red?style=for-the-badge&labelColor=f66767&color=f0134d)](https://github.com/GulajavaMinistudio/Mayukai-Theme)

This is project Router Using PHP

My Github : [IzyanzZ](github.com/IzyanzZ)

### Tutorial

This is example of using RouterPHP

```php
<?php

require_once __DIR__ "vendor/autoload.php";

use IzyanzZ\Router;

$route = new Router();

$route->get("/", function() {
  echo "Hello, World!";
});

// Or

$route->post("/", function() {
  echo "Hello, World!";
});

$route->run();

```
