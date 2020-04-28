<?php
//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//add any requires here
require_once('vendor/autoload.php');

session_start();
$f3 = Base::instance();
$controller = new Controller($f3);

$f3->route("GET /", function (){
    $GLOBALS['controller']->home();
});
//        //Instantiate Fat-Free

//        $this->_validator = new Validate();
//        $this->_db = new Database();
//        //Turn on Fat-Free error reporting
//        $this->_f3->set('DEBUG', 3);
//    }