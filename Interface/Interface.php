<?php

/**
 * Interfaces of different functions to be
 * implemented into MyDetails class and 
 * get there their implementation
 */
interface MyName
{
    public function myName($name);
    public function address();
}
interface MyAge extends MyName
{
    public function myAge($age);
}
interface MyNumber extends myAge
{
    public function myNumber($number);
}

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Interface Problem
 */
abstract class MyDetails implements MyNumber
{
    public function myName($name)
    {
        echo "Name:: " . $name;
    }
    public function myAge($age)
    {
        echo "\nAge:: " . $age;
    }
    public function myNumber($number)
    {
        echo "\nNumber:: " . $number;
    }
}

$myDetatils = new MyDetails();

$name = readline('Enter Your Name: ');
$age = readline('Enter Your Age: ');
$number = readline('Enter Your Phone Number: ');

$myDetatils->myName($name);
$myDetatils->myAge($age);
$myDetatils->myNumber($number);
