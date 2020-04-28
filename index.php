<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//add any requires here
require_once('vendor/autoload.php');
session_start();
$f3 = Base::instance();
$f3->set('DEBUG', 3);
$controller = new Controller($f3);
//define a default route

$f3->route('GET /', function (){
    global $controller;
    $controller->home();
});
$f3->run();
