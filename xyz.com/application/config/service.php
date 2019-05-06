<?php

$di = new Phalcon\Di\FactoryDefault();

$di->set('view', function(){
    $view = new \Phalcon\Mvc\View();
    $view->setViewsDir('application/views');
    return $view;
});

$di->set('router', function(){
    $router = new \Phalcon\Mvc\Router();

    $router->add('/test1api',[
        
        'controller' =>'show',
        'action' =>'index'
    ]);

    $router->add('/test1',[
        
        'controller' =>'index',
        'action' =>'index'
    ]);
    return $router;
});

