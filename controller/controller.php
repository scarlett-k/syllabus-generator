<?php
class Controller {

    private $_f3;

    private $_validator;

    private $_db;
    function __construct($f3)
    {
        $this->_f3 = $f3;
    }

    function home($f3)
    {
        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $this->_validator = new Validate($f3);

            if ($this->_validator->validInfo()) {
                $first = $_POST['firstName'];
                $last = $_POST['lastName'];
                $email = $_POST['email'];
                $office = $_POST['office-hrs'];
                $meeting = $_POST['meeting-hrs'];
                $course = $_POST['course'];
                $location = $_POST['location'];
                $isbn = $_POST['isbn'];

                $syllabus = new syllabus($first, $last, $email, $office, $meeting, $course, $location, $isbn);
//                var_dump($syllabus);

                $_SESSION['syllabus'] = $syllabus;

                $f3->reroute('/preview');

                var_dump($_SESSION['syllabus']);

                $_SESSION = array();
            }
            else {
                $this->_f3->set('preview', $_POST);
            }

        }
//        var_dump($_SESSION['syllabus']);
//
//        $_SESSION = array();

        $view = new Template();
        echo $view->render("views/form.html");

    }

    function preview()
    {

        $view = new Template();
        echo $view->render("views/preview.html");
    }
}