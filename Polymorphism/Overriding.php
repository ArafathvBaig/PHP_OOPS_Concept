<?php

/**
 * Author -> Arafath Baig
 * PHP Version -> 8.0.9
 * Class to Compute Overriding Problem
 */
class Name
{
    /**
     * Function to Print name
     * Passing name as parameter
     */
    public function name($name)
    {
        echo "Name in Name Class: " . $name;
    }
}
class Names extends Name
{
    public function name($name)
    {
        echo "\nName in Names Class: " . $name;
    }
}
$nameObj = new Name();
$namesObj = new Names();

$myName = readline('Enter Name: ');

$nameObj->name($myName);
$namesObj->name($myName);
