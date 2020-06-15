<?php

/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 5/1/2020
 * @version 1.0
 * validate.php
 * team-brian
 */
class Validate
{
    private $_f3;

    private $_errors;

    public function __construct($f3)
    {
        $this->_f3 = $f3;
        $this->_errors = array();
    }

    public function getErrors()
    {
        return $this->_errors;
    }
    public function validInfo() {
        $this->validFirst($_POST['firstname']); // done
        $this->validLast($_POST['lastname']);// done
        $this->validPhone($_POST['phone']);// done
        $this->validOffice($_POST['office']);// done
        $this->validOfficeHours($_POST['office-hrs']);// done
        $this->validEmail($_POST['email']);// done
        $this->validCoursePrefix($_POST['courseprefix']);// done
        $this->validItemNumber($_POST['course-item']);// done
        $this->validMeetingHours($_POST['meeting-hrs']);// done
        $this->validLocation($_POST['class-location']);
        $this->validISBN($_POST['isbn']);

//        return empty($this->_errors);
        return true;
    }
    
    /**
     * @param $string
     */
    public function validFirst($first)
    {
        if (!ctype_alpha($first) OR empty(trim($first))) {
            $this->_errors['firstname'] = "please enter a first name.";
        }
    }

    public function validLast($last)
    {
        if (!ctype_alpha($last) OR empty(trim($last))) {
            $this->_errors['lastname'] = "please enter a last name.";
        }
    }
    /**
     * @param $phone
     */
    function validPhone($phone){
        if (!preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)||
            !preg_match("/^[0-9]{10}$/", $phone)) {
            $this->_errors['phone'] = "please enter a phone number.";
        }
    }

    /**
     * @param $email
     */
    public function validEmail($email){
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $this->_errors['email'] = "valid email is required: email@example.com";
        }
    }

    /**
     * @param $office
     */
    function validOffice($office) {
        if (empty(trim($office)) || !preg_match("/^[a-zA-Z0-9\s]*$/", $office)) {
            $this->_errors['office'] = "please enter a valid office location";
        }
    }

    /**
     * @param $hour
     */
    public function validOfficeHours($hour){
        if (!ctype_digit($hour)) {
            $this->_errors['office-hrs'] = "please enter office hours";
        }
    }

    public function validCoursePrefix ($prefix)
    {
        if ($prefix == '-1') {
            $this->_errors['prefix'] = "Please enter a course prefix";
        }
    }

    public function validItemNumber($number)
    {
        if (empty($number)&& !ctype_digit($number)) {
            $this->_errors['course-item'] = "please enter a valid course number";
        }
    }
    /**
     * @param $hour
     */
    public function validMeetingHours($hour){
        if (!ctype_digit($hour)) {
            $this->_errors['meeting-hrs'] = "please enter meeting hours";
        }
    }
//    /**
//     * @param $string
//     */
//    public function validClassPrefix($string){
//        if (!preg_match("/^[a-zA-Z\s.(&)]*$/", $string)) {
//            $this->_errors['class'] = "please enter a valid class prefix";
//        }
//    }
//
//    /**
//     * @param $num
//     */
//    public function validClassNum($num){
//        if (!ctype_digit($num)) {
//            $this->_errors['classnum'] = "please enter a valid class number";
//        }
//    }

    public function validLocation($location)
    {
        if (empty(trim($location)) || !preg_match("/^[a-zA-Z0-9\s]*$/", $location)) {
            $this->_errors['class-location'] = "please enter a valid class location";
        }
    }

    function validISBN($ISBN){
        if (!preg_match("/^[0-9]{3}-[0-9]-[0-9]{2}-[0-9]{6}-[0-9]$/", $ISBN)||
            !preg_match("/^[0-9]-[0-9]{3}-[0-9]{5}-[0-9]$/", $ISBN)||
            !preg_match("/^[0-9]{13}$/", $ISBN) ||
            !preg_match("/^[0-9]{10}$/", $ISBN)) {
            $this->_errors['isbn'] = "please enter a valid isbn";
        }
    }
}
