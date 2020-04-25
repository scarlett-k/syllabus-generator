<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//add any requires here

session_start();

$controller = new Controller();

$controller->getF3()->route("GET /", function (){
    global $controller;
    $controller ->home();
});
