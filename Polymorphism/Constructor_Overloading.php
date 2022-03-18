<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Constructor Overloading Problem
 */
class Constructor_Overloading
{
    function __construct()
    {
        $args =  func_get_args();
        $construct = '__construct' . func_num_args();
        if (method_exists($this, $construct)) {
            call_user_func_array(array($this, $construct), $args);
        }
        else{
            echo "\nConstructor not there::";
        }
    }
    function __construct1($number)
    {
        echo "The Number is:: " . $number;
    }
    function __construct2($num1, $num2)
    {
        echo "\nThe Numbers are:: " . $num1 . ", " . $num2;
    }
    function __construct3($num1, $num2, $num3)
    {
        echo "\nThe Numbers are:: " . $num1 . ", " . $num2 . ", " . $num3;
    }
}
$constructorOverloading = new Constructor_Overloading(20);
$constructorOverloading = new Constructor_Overloading(20, 25);
$constructorOverloading = new Constructor_Overloading(20, 25, 30);
$constructorOverloading = new Constructor_Overloading(20, 25, 30, 40);
