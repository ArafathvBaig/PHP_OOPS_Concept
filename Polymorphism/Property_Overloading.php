<?php
class Property
{
    public $name;
    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function show()
    {
        echo "Name:: " . $this->name;
        echo "\nAge:: " . $this->age;
    }
}
$property = new Property("Arafath", 25);
$property->show();
