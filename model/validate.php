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

    public function __construct($f3)
    {
        $this->_f3 = $f3;

    }

    public function validInfo() {
        $this->validName($_POST['firstName']);
        $this->validName($_POST['lastName']);
        $this->validEmail($_POST['email']);
        $this->validOfficeHours($_POST['office-hrs']);
        $this->validOfficeHours($_POST['meeting-hrs']);
        $this->validClass($_POST['course']);
        $this->validLocation($_POST['location']);
        $this->validISBN($_POST['isbn']);
    }
    
    /**
     * @param $string
     * @return bool
     */
    function validName($string){
        return ctype_alpha($string) AND ($string !="");
    }

    /**
     * @param $phone
     * @return bool
     */
    function validPhone($phone){
        return preg_match("/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/", $phone)||
               preg_match("/^[0-9]{10}$/", $phone);
    }

    /**
     * @param $email
     * @return mixed
     */
    function validEmail($email){
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }

    /**
     * @param $hour
     * @return bool
     */
    function validOfficeHours($hour){
        return ctype_digit($hour);
    }

    /**
     * @param $string
     * @return bool
     */
    function validClass($string){
        return preg_match("/^[a-zA-Z0-9\s.(&)]*$/", $string);
    }

    /**
     * @param $string
     * @return bool
     */
    function validLocation($string){
        return preg_match("/^[a-zA-Z0-9\s.-]*$/", $string);
    }

    function validISBN($ISBN){
        return preg_match("/^[0-9]{3}-[0-9]-[0-9]{2}-[0-9]{6}-[0-9]$/", $ISBN)||
               preg_match("/^[0-9]-[0-9]{3}-[0-9]{5}-[0-9]$/", $ISBN)||
               preg_match("/^[0-9]{13}$/", $ISBN) ||
               preg_match("/^[0-9]{10}$/", $ISBN);
    }
}
