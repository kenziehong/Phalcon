<?php

use Phalcon\Mvc\Router;

$router = new Router();

$router->add(
    '/test1',
    [
        'controller' => 'index',
        'action'     => 'index',
    ]
);


return $router;