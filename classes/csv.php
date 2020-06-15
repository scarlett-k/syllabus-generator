<?php
/**
 * Created in PhpStorm
 * @author Brian Kiehn
 * @date 6/13/2020
 * @version 1.0
 * csv.php - class that interacts directly with the csv file
 * team-brian
 */


class csv
{
    private $csv;
    private $preArray = array();
    private $coursesArray = array();
    private $row = array();

    /**
     * csv constructor.
     */
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
     * gets csv file path
     * @return mixed
     */
    public function getCsv()
    {
        return $this->csv;
    }

    /**
     * gets array of prefixes (unique values)
     * @return array
     */
    public function getPreArray()
    {
        return $this->preArray;
    }

    /**
     * gets array of all the courses availible in the course catalog
     * @return array
     */
    public function getCoursesArray()
    {
        return $this->coursesArray;
    }

    /**
     * gets the row that contains the course
     * @param $course - course item (prefix)(&, if it exists)(item #)
     * @return mixed - row (success) || null (fail)
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
