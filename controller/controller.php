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
            $csv = new csv();
            $f3->set('prefix', $csv->getPreArray());
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $first = $_POST['firstName'];
            $last = $_POST['lastName'];
            $phone = $_POST['phone'];
            $office = $_POST['office'];
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
            $policies = $_POST['policies'];
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
                $phone, $prefix, $courseNum, $meetingTimes, $location, $textbook, $isbn, $materials, $policies);

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

    function preview($f3)
    {
        $csv = new csv();
        $f3->set('course', ($_SESSION['syllabus']->getPrefix()).
            ($_SESSION['syllabus']->getCourseNum()));

        $row = $csv->getRow($f3->get('course'));

        $f3->set('courseTitle', $row[36]);
        $f3->set('creditHours', $row[15]);
        $f3->set('preReq', $row[28]);
        $f3->set('basicDesc', $row[18]);
        $f3->set('programOutcomes', $row[35]);
        $f3->set('CampusOutcomes', $row[107]);

        $view = new Template();
        echo $view->render("views/preview.html");
    }
}