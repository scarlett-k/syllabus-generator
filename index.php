<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//add any requires here
require_once('vendor/autoload.php');

session_start();

$controller = new Controller();
//        //Instantiate Fat-Free
        $this->_f3 = Base::instance();
//        $this->_validator = new Validate();
//        $this->_db = new Database();
//        //Turn on Fat-Free error reporting
//        $this->_f3->set('DEBUG', 3);
//    }
$controller->route("GET /", function (){
    global $controller;
    $controller ->home();
});
