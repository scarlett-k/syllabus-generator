<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 6/13/2020
 * @version 1.0
 * csv.php
 * syllabus-generator
 */


class csv
{
    private $csv;
    private $preArray = array();
    private $coursesArray = array();
    private $row = array();

    public function __construct(){
        $this->csv = 'resources/courses-list-2020.csv';
        $file = fopen ($this->csv, 'r');

        while(! feof($file)) {
            $data = fgetcsv($file);

            $course = $data[11];
            if (array_search($data[11], $this->preArray) == false) {
                array_push($this->preArray, $data[11]);
            }
            if($data[12] != NULL){
                $course = $course . $data[12];
            }

            $course = $course . $data[13];
            array_push($this->coursesArray, $course);

        }
        fclose($file);
    }

    /**
     * @return mixed
     */
    public function getCsv()
    {
        return $this->csv;
    }

    /**
     * @return array
     */
    public function getPreArray()
    {
        return $this->preArray;
    }

    /**
     * @return array
     */
    public function getCoursesArray()
    {
        return $this->coursesArray;
    }

    /**
     * @param $course
     * @return mixed
     */
    public function getRow($course)
    {
        $file = fopen ($this->csv, 'r');

        while(! feof($file)) {
            $data = fgetcsv($file);

            if($course == $data[11].$data[12].$data[13] ||
                ($course == $data[11].$data[13] && $data[12] == NULL)) {
                foreach ($data as $column) {
                    array_push($column, $this->row);
                }
                fclose($file);
                return $this->row;
            }
        }
        fclose($file);
        return null;
    }

}