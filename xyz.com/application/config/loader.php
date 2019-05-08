<?php

$loader = new \Phalcon\Loader();

$loader->registerDirs([
    'application/controllers',
    'application/models',
    'application/views',
])->register();

$loader->registerClasses([
    "Application\Vendor\Xyzcom\Grouprouter\Groupchapter"  => APPLICATION_PATH."/application/vendor/xyzcom/grouprouter.php",
])->register();