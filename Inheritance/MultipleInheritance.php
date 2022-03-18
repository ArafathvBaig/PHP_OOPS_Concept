<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Classes to Compute Multiple inheritance Problem
 */
class MyName
{
    /**
     * Function to print name
     * passing name as parameter
     */
    public function myName($name)
    {
        echo "\nName:: " . $name;
    }
}
trait MyAge
{
    /**
     * Function to print age
     * passing age as parameter
     */
    public function myAge($age)
    {
        echo "\nAge:: " . $age;
    }
}
class MyNumber extends MyName
{
    use MyAge;
    /**
     * Function to print number
     * passing number as parameter
     */
    public function myNumber($number)
    {
        echo "\nPhone Number:: " . $number;
    }
}
$myNumberObj = new MyNumber();

$name = readline('Enter Your Name: ');
$age = readline('Enter Your Age: ');
$number = readline('Enter Your Phone Number: ');
$myNumberObj->myName($name);
$myNumberObj->myNumber($number);
$myNumberObj->myAge($age);
