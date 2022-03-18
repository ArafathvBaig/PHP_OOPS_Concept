<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Overloading Problem
 */
class Student
{
    private $firstname;
    private $gender;

    /**
     * Getters and Setters to access the 
     * private local variables of the class
     */
    public function getFirstName()
    {
        return $this->firstname;
    }

    public function setFirstName($firstname)
    {
        $this->firstname = $firstname;
        echo ("First name is set to " . $firstname . "\n");
    }

    public function getGender()
    {
        return $this->gender;
    }

    public function setGender($gender)
    {
        if ($gender == 'Male' || $gender == 'Female') {
            $this->gender = $gender;
            echo ("Gender is set to " . $gender);
        } else {
            echo ('Set gender as Male or Female for gender');
        }
    }
}

$student = new Student();
$student->setFirstName('Arafath Baig');
$student->setGender('Male');
