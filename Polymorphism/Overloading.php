<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Function Overloading Problem
 */
class Addition
{
    /**
     * Function to add numbers based on name and arguments
     * passing the arguments as arguments
     * calling their repective fucnctions based on arguments count
     */
    public function __call($name, $arguments)
    {
        if ($name == "addition") {
            if (count($arguments) == 2) {
                echo "Addition of 2 Numbers: " . $this->addTwoNumbers($arguments[0], $arguments[1]);
            } elseif (count($arguments) == 3) {
                echo "\nAddition of 3 Numbers: " . $this->addThreeNumbers($arguments[0], $arguments[1], $arguments[2]);
            } else {
                echo "\nWrong Input";
            }
        }
        else{
            echo "\nWrong Name";
        }
    }

    /**
     * Funciton to add two numbers
     * passing two numbers as arguments
     * Returns the addition of two numbers
     */
    public function addTwoNumbers($a, $b)
    {
        $c = $a + $b;
        return $c;
    }

    /**
     * Funciton to add three numbers
     * passing three numbers as arguments
     * Returns the addition of three numbers
     */
    public function addThreeNumbers($a, $b, $c)
    {
        $d = $a + $b + $c;
        return $d;
    }
}

$additionObj = new Addition();
$additionObj->addition(1, 2);
$additionObj->addition(1, 2, 3);
