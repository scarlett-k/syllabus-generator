<?php
class Controller {

    private $_f3;

    private $_validator;

    private $_db;
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }



    public function home()
    {
        $view = new Template();
        echo $view->render("views/form.html");
    }

}