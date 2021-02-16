<?php 

require_once 'vendor/autoload.php';
$debug = new application\lib\Dev;
$router = new application\core\Router;
// $db = new application\lib\Db;



$router->run();