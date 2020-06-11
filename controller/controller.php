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
            $location = $_POST['location'];
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
            $days = array("Mon", "Tue", "Wed", "Thur", "Fri");
            $mer = '';
            $endHour='';
            $mer2='';
            foreach ($_POST['officeHoursStart'] as $key => $value) {
                foreach ($_POST['officeHoursEnd'] as $key2 => $value2) {
                    if (!empty($value) && !empty($value2)) {
                        if (($_POST['officeHoursStart']) != "") {
                            $strhour=$value;
                             if ($value > 12) {
                                    $mer = 'PM';
                                 $strhour -= 12;
                                } else if ($value < 12) {
                                    $mer = 'AM';
                                    if ($value == 0) {
                                        $strhour = 12;
                                    }
                                } else {
                                    $mer = 'PM';
                                }
                            $endHour=$value2;
                            if ($value2 > 12) {
                                $mer2 = 'PM';
                                $endHour -= 12;
                            } else if ($value2 < 12) {
                                $mer = 'AM';
                                if ($value2 == 0) {
                                    $endHour = 12;
                                }
                            } else {
                                $mer = 'PM';
                            }
//                           $hour = hrChanger($value);
//                           $endHour = hrChanger($value2);

                        }
                    }

                }         $officehrs .= ' ' . $key .": ". $strhour . $mer . "-"  . $endHour . $mer2 . "<br>";
            }











//            function hrChanger($value){
//                if ($value > 12) {
//                    $mer = 'PM';
//                    $value -= 12;
//                } else if ($value < 12) {
//                    $mer = 'AM';
//                    if ($value == 0) {
//                        $value = 12;
//                    }
//                } else {
//                    $mer = 'PM';
//                }
//            }


            $syllabus = new syllabus($first, $last, $email, $office, $officehrs,
                $phone, $prefix, $courseNum, $meetingTimes, $location, $textbook, $isbn, $materials, $other);

            $_SESSION['syllabus'] = $syllabus;


            $f3->reroute('/preview');

            $_SESSION = array();
        }
        else {
            var_dump($_POST);
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