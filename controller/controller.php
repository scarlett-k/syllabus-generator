<?php
class Controller {
    /**
     * @var Base
     */
    private $_f3;
    /**
     * @var Validate
     */
    private $_validator;
    /**
     * @var Database
     */
    private $_db;
    /**
     * ICollectController constructor.
     */
    public function __construct()
    {
        //Instantiate Fat-Free
        $this->_f3 = Base::instance();
        $this->_validator = new Validate();
        $this->_db = new Database();
        //Turn on Fat-Free error reporting
        $this->_f3->set('DEBUG', 3);
    }

    /**
     * Home page of iCollect
     */
    public function home()
    {
        $view = new Template();
        echo $view->render("views/form.html");
    }

}