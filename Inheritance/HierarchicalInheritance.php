<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Classes to Compute Heirarchical inheritance Problem
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
class MyAge extends MyName
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
    /**
     * Function to print number
     * passing number as parameter
     */
    public function myNumber($number)
    {
        echo "\nPhone Number:: " . $number;
    }
}
$myAgeObj = new MyAge();
$myNumberObj = new MyNumber();
$name = readline('Enter Your Name: ');
$age = readline('Enter Your Age: ');
$number = readline('Enter Your Number: ');

$myAgeObj->myName($name);
$myAgeObj->myAge($age);

$myNumberObj->myName($name);
$myNumberObj->myNumber($number);
