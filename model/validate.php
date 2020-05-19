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
        $this->validFirst($_POST['firstName']);
        $this->validLast($_POST['lastName']);
        $this->validEmail($_POST['email']);
        $this->validOfficeHours($_POST['office-hrs']);
        $this->validOfficeHours($_POST['meeting-hrs']);
        $this->validClass($_POST['course']);
        $this->validLocation($_POST['location']);
        $this->validISBN($_POST['isbn']);

        return empty($this->_errors);
    }
    
    /**
     * @param $string
     * @return bool
     */
    public function validFirst($first)
    {
        if (ctype_alpha($first) AND empty(trim($first))) {
            $this->_errors['firstName'] = "please enter a first name.";
        }
    }

    public function validLast($last)
    {
        if (ctype_alpha($last) AND empty(trim($last))) {
            $this->_errors['lastName'] = "please enter a last name.";
        }
    }
    /**
     * @param $phone
     * @return bool
     */
    function validPhone($phone){
        if (preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)||
            preg_match("/^[0-9]{10}$/", $phone)) {
            $this->_errors['phone'] = "please enter a phone number.";
        }
    }

    /**
     * @param $email
     * @return mixed
     */
    public function validEmail($email){
         if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
             $this->_errors['email'] = "valid email is required: email@example.com";
         }
    }

    /**
     * @param $hour
     * @return bool
     */
    public function validOfficeHours($hour){
        if (ctype_digit($hour)) {
            $this->_errors['office-hrs'] = "please enter office hours";
        }
    }

    /**
     * @param $string
     * @return bool
     */
    public function validClass($string){
        if (preg_match("/^[a-zA-Z0-9\s.(&)]*$/", $string)) {
            $this->_errors['class'] = "please enter a valid class";
        }
    }

    /**
     * @param $string
     * @return bool
     */
    function validLocation($string){
        if (preg_match("/^[a-zA-Z0-9\s.-]*$/", $string)) {
            $this->_errors['location'] = "please enter a valid location";
        }
    }

    function validISBN($ISBN){
        if (preg_match("/^[0-9]{3}-[0-9]-[0-9]{2}-[0-9]{6}-[0-9]$/", $ISBN)||
            preg_match("/^[0-9]-[0-9]{3}-[0-9]{5}-[0-9]$/", $ISBN)||
            preg_match("/^[0-9]{13}$/", $ISBN) ||
            preg_match("/^[0-9]{10}$/", $ISBN)) {
            $this->_errors['isbn'] = "please enter a valid isbn";
        }
    }
}
