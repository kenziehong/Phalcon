<?php
ini_set("display_errors", 0);
ini_set("log_errors", 1);
ini_set("error_log", dirname(__FILE__).'/error_log.txt');

require dirname(__FILE__).'/vendor/autoload.php';

use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler(dirname(__FILE__).'/log.txt', Logger::WARNING));


echo "<h1>Index.php</h1>";