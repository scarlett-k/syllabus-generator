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
    /**
     * @param $String
     * @return bool
     */
    function validString($String){
        return ctype_alpha($String) AND ($String !="");
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

    function validOfficeHours($hour){
        return ctype_digit($hour);
    }

    function validISBN($ISBN){
        return preg_match("/^[0-9]{3}-[0-9]-[0-9]{2}-[0-9]{6}-[0-9]$/", $ISBN)||
               preg_match("/^[0-9]-[0-9]{3}-[0-9]{5}-[0-9]$/", $ISBN)||
               preg_match("/^[0-9]{13}$/", $ISBN) ||
               preg_match("/^[0-9]{10}$/", $ISBN);
    }
}
