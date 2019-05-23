<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs([
    'application/controllers',
    'application/models',
    'application/views',
    ])->register();

$loader->registerClasses([
    "Application\Vendor\Xyzcom\Grouprouter\Groupchapter"  => APPLICATION_PATH."/application/vendor2/xyzcom/grouprouter.php",
])->register();

// $loader->registerNamespaces([
//     "Application\Vendor\Xyzcom\Service"  => APPLICATION_PATH."/application/vendor2/xyzcom/service",
// ]);


//$path = APPLICATION_PATH . "/vendor/autoload.php";

//$loader->registerFiles([ APPLICATION_PATH . "/vendor/autoload.php" ])->register();
