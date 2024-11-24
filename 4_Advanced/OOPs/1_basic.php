<?php
class Car{
    public $make;
    public $model;
    public $year;


    public function __construct($make, $model, $year){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function getCarDetails(){
        return "Make: $this->make, Model: $this->model, Year: $this->year<br>";
    }
}

$car1 = new Car("Toyota", "Corolla", 2015);
echo $car1->getCarDetails();
