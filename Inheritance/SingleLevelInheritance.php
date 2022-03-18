<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Classes to Compute Single level inheritance Problem
 */
class MyName
{
    /**
     * Function to print name
     * passing name as parameter
     */
    public function myName($name)
    {
        echo "Name:: " . $name;
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
$myAgeObj = new MyAge();

$name = readline('Enter Your Name: ');
$age = readline('Enter Your Age: ');

$myAgeObj->myName($name);
$myAgeObj->myAge($age);
