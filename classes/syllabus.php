<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
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
    private $_course;
    private $_meetingTimes;
    private $_location;
    private $_prerequ;
    private $_textbook;
    private $_materials;

    /**
     * syllabus constructor.
     * @param $_firstname
     * @param $_lastname
     * @param $_office
     * @param $_officeHours
     * @param $_course
     * @param $_meetingTimes
     * @param $_location
     */
    public function __construct($_firstname, $_lastname, $_email, $_office, $_officeHours,
                                $_course, $_meetingTimes, $_location)
    {
        $this->_firstname = $_firstname;
        $this->_lastname = $_lastname;
        $this->_email = $_email;
        $this->_office = $_office;
        $this->_officeHours = $_officeHours;
        $this->_course = $_course;
        $this->_meetingTimes = $_meetingTimes;
        $this->_location = $_location;
    }


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
    public function getCourse()
    {
        return $this->_course;
    }

    /**
     * @param mixed $course
     */
    public function setCourse($course)
    {
        $this->_course = $course;
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
    public function getPrerequ()
    {
        return $this->_prerequ;
    }

    /**
     * @param mixed $prerequ
     */
    public function setPrerequ($prerequ)
    {
        $this->_prerequ = $prerequ;
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

    /**
     * @return mixed
     */
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
}