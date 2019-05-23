<?php

define('APPLICATION_PATH', __DIR__);

//echo APPLICATION_PATH;
try{
    //loader
    require_once APPLICATION_PATH.'/application/config/loader.php';

    //dependency injection
    require_once APPLICATION_PATH.'/application/config/service.php';

    require_once __DIR__ . '/vendor/autoload.php';

    

    //application
    $application = new \Phalcon\Mvc\Application($di);
    echo $application->handle()->getContent();

}catch(\Exception $e){
    echo  'Message: '.$e->getMessage();
}

  
// //loader
// require_once APPLICATION_PATH.'/application/config/loader.php';

// //dependency injection
// require_once APPLICATION_PATH.'/application/config/service.php';


// //application
// $application = new \Phalcon\Mvc\Application($di);
// echo $application->handle()->getContent();
