<?php

class Vehicle{
    public $type;
    public $brand;

    public function __construct($type, $brand){
        $this->type = $type;
        $this->brand = $brand;
    }

    function get_type(){
        return $this->type;
    }

    function get_brand(){
        return $this->brand;
    }
}

$vehicle1 = new Vehicle("Car", "Toyota");
echo "Type: ".$vehicle1->get_type().", Brand: ".$vehicle1->get_brand()."<br>";
$vehicle2 = new Vehicle("Bike", "Honda");
echo "Type: ".$vehicle2->get_type().", Brand: ".$vehicle2->get_brand()."<br>";