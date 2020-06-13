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
//        var_dump($_POST);
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//            $this->_validator = new Validate($f3);

//            if ($this->_validator->validInfo()) {
            $first = $_POST['firstName'];
            $last = $_POST['lastName'];
            $phone = $_POST['phone'];
            $office = $_POST['office'];
//            $course  = $_POST['courseprefix'] /* + ' ' + $_POST['course-item']*/;
//                $f3->set('office-location', 'offLocation');
            $email = $_POST['email'];
            $officehrs = "";
            $meetingTimes = $_POST['meeting-hrs'];
            $prefix = $_POST['courseprefix'];
            $courseNum = $_POST['course-item'];
            $location = $_POST['location'];
            $textbook = $_POST['textbook'];
            $isbn = $_POST['isbn'];
            $materials = $_POST['materials'];
            $other = $_POST['other'];
            $strTime='';
            $endTime='';
            foreach ($_POST['officeHoursStart'] as $key => $value) {
                if (!empty($_POST['officeHoursStart'])) {
                    if (!empty($value) && !empty($_POST['officeHoursStart'][$key])) {
                        $strTime = date("g:i a", strtotime($value));
                        $endTime = date("g:i a", strtotime($_POST['officeHoursEnd'][$key]));
                        $key.= ": ";
                        $strTime.="-";
                        $endTime.="<br>";
                    }
                    else {
                        $strTime='';
                        $endTime='';
                        $key ='';
                    }
                }
                    $officehrs .= ' ' . $key . $strTime . $endTime ;
            }

            foreach ($_POST['meetingTimesStart'] as $key => $value) {
                if (!empty($_POST['meetingTimesStart'])) {
                    if (!empty($value) && !empty($_POST['meetingTimesStart'][$key])) {
                        $strTime = date("g:i a", strtotime($value));
                        $endTime = date("g:i a", strtotime($_POST['meetingTimesEnd'][$key]));
                        $key.= ": ";
                        $strTime.="-";
                        $endTime.="<br>";
                    }
                    else {
                        $strTime='';
                        $endTime='';
                        $key ='';
                    }
                }

                $meetingTimes .=  $key. $strTime . $endTime;
            }

            $syllabus = new syllabus($first, $last, $email, $office, $officehrs,
                $phone, $prefix, $courseNum, $meetingTimes, $location, $textbook, $isbn, $materials, $other);

            $_SESSION['syllabus'] = $syllabus;


            $f3->reroute('/preview');

            $_SESSION = array();
        }
        else {
//            var_dump($_POST);
//                $this->_f3->set('errors', $this->_validator->getErrors());
//                var_dump($this->_validator->getErrors());
            $this->_f3->set('preview', $_POST);
        }
//        var_dump($_SESSION['syllabus']);

//        $_SESSION = array();

        $view = new Template();
        echo $view->render("views/form.html");

    }

    function preview()
    {
//        var_dump($_POST);
        $view = new Template();
        echo $view->render("views/preview.html");
    }
}