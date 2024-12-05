<?php
class Car{
    public $make;
    public $model;
    public $year;
    public $new, $brand;


    public function __construct($make, $model, $year, $new, $brand){
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
        $this->new = $new;
        $this->brand = $brand;
    }

    public function getCarDetails(){
        return "Make: $this->make, Model: $this->model, Year: $this->year, New: $this->new, Brand: $this->brand<br>";
    }
}

$car1 = new Car("Toyota", "Corolla", 2015, "Yes", "Latest");
echo $car1->getCarDetails();
