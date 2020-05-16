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

$f3->route('GET|POST /', function ($f3){
    $GLOBALS['controller']->home($f3);
});

$f3->route('GET /preview', function () {
    $GLOBALS['controller']->preview();
});
$f3->run();
