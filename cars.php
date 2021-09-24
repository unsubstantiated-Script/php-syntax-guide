<?php
//bringing in the laravel support
require "vendor/autoload.php";

//Legacy code like you'd get from a JSON array
$carData = [
    ["make" => "Ford", "model" => "Mustang", "year" => 1990],
    ["make" => "Chevy", "model" => "Malibu", "year" => 2015],
    ["make" => "Volkswagon", "model" => "Bug", "year" => 1977],
    ["make" => "Honda", "model" => "Accord", "year" => 1997],
    ["make" => "Toyota", "model" => "Highlander", "year" => 2012],
];

class Car
{
    public $make, $model, $year;

    public function __construct($make, $model, $year)
    {
        $this->make = $make;
        $this->model = $model;
        $this->year = $year;
    }

    public function __toString()
    {
        return "Make: $this->make, Model: $this->model, Year: $this->year";
    }
}

//Preferred way to load this up...
$carCollection = collect($carData);
$cars = $carCollection->map(function ($car) {
    return new Car($car["make"], $car["model"], $car["year"]);
});

// print_r($cars);

//filtering out cars
$carsAbove2000 = $cars->filter(function ($car) {
    return $car->year > 2000;
});

print_r($carsAbove2000);
