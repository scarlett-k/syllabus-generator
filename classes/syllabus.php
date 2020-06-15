<?php
/**
 * Created in PhpStorm
 * @authors Brian Kiehn, Cody Zipp, Scarlett Kim
 * @date 5/12/2020
 * @version 1.0
 * syllabus.php
 * team-brian
 */


class syllabus
{
    private $_firstname;
    private $_lastname;
    private $_email;
    private $_office;
    private $_officeHours;
    private $_phone;
    private $_course;
    private $_meetingTimes;
    private $_location;
    private $_prefix;
    private $_courseNum;
    private $_textbook;
    private $_isbn;
    private $_materials;
    private  $_other;


    /**
     * syllabus constructor.
     * @param $_firstname
     * @param $_lastname
     * @param $_email
     * @param $_office
     * @param $_officeHours
     * @param $_phone
     * @param $_prefix
     * @param $_meetingTimes
     * @param $_location
     * @param $_courseNum
     * @param $_textbook
     * @param $_materials
     *  @param $_isbn
     *  @param $_other
     */
    public function __construct($_firstname, $_lastname, $_email, $_office, $_officeHours, $_phone,
                                $_prefix, $_courseNum, $_meetingTimes, $_location, $_textbook, $_isbn, $_materials, $_other)
    {
        $this->_firstname = $_firstname;
        $this->_lastname = $_lastname;
        $this->_email = $_email;
        $this->_office = $_office;
        $this->_officeHours = $_officeHours;
        $this->_phone = $_phone;
        $this->_prefix = $_prefix;
        $this->_courseNum = $_courseNum;
        $this->_meetingTimes = $_meetingTimes;
        $this->_location = $_location;
        $this->_textbook = $_textbook;
        $this->_isbn = $_isbn;
        $this->_materials = $_materials;
        $this->_other = $_other;
    }

    //getters and setters
    /**
     * @return mixed
     */
    public function getFirstname()
    {
        return $this->_firstname;
    }

    /**
     * @param mixed $firstname
     */
    public function setFirstname($firstname)
    {
        $this->_firstname = $firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->_lastname;
    }

    /**
     * @param mixed $lastname
     */
    public function setLastname($lastname)
    {
        $this->_lastname = $lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->_email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->_email = $email;
    }

    /**
     * @return mixed
     */
    public function getOffice()
    {
        return $this->_office;
    }

    /**
     * @param mixed $office
     */
    public function setOffice($office)
    {
        $this->_office = $office;
    }

    /**
     * @return mixed
     */
    public function getOfficeHours()
    {
        return $this->_officeHours;
    }

    /**
     * @param mixed $officeHours
     */
    public function setOfficeHours($officeHours)
    {
        $this->_officeHours = $officeHours;
    }

    /**
     * @return mixed
     */
    public function getPrefix()
    {
        return $this->_prefix;
    }

    /**
     * @param mixed $prefix
     */
    public function setPrefix($prefix)
    {
        $this->_prefix = $prefix;
    }

    /**
     * @return mixed
     */
    public function getCourseNum()
    {
        return $this->_courseNum;
    }

    /**
     * @param mixed $courseNum
     */
    public function setCourseNum($courseNum)
    {
        $this->_courseNum = $courseNum;
    }



    /**
     * @return mixed
     */
    public function getMeetingTimes()
    {
        return $this->_meetingTimes;
    }

    /**
     * @param mixed $meetingTimes
     */
    public function setMeetingTimes($meetingTimes)
    {
        $this->_meetingTimes = $meetingTimes;
    }

    /**
     * @return mixed
     */
    public function getLocation()
    {
        return $this->_location;
    }

    /**
     * @param mixed $location
     */
    public function setLocation($location)
    {
        $this->_location = $location;
    }


    /**
     * @return mixed
     */
    public function getTextbook()
    {
        return $this->_textbook;
    }

    /**
     * @param mixed $textbook
     */
    public function setTextbook($textbook)
    {
        $this->_textbook = $textbook;
    }
    public function getMaterials()
    {
        return $this->_materials;
    }
    /**
     * @param mixed $materials
     */
    public function setMaterials($materials)
    {
        $this->_materials = $materials;
    }


    /**
     * @return mixed
     */
    public function getISBN()
    {
        return $this->_isbn;
    }
    /**
     * @param mixed $isbn
     */
    public function setISBN($isbn)
    {
        $this->_isbn = $isbn;
    }
    /**
     * @return mixed
     */
    public function getPhone()
    {
        return $this->_phone;
    }

    /**
     * @param mixed $phone
     */
    public function setPhone($phone)
    {
        $this->_phone = $phone;
    }
    /**
     * @return mixed
     */
    public function getOther()
    {
        return $this->_other;
    }

    /**
     * @param mixed $other
     */
    public function setOther($other)
    {
        $this->_other = $other;
    }
}
