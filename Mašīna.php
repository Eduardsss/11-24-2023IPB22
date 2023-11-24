<?php
class Car {
    public $brand;
    private $mileage;

    public function __construct($brand, $mileage) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    public function __destruct() {
        echo $this->brand . " is dead at mileage " . $this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage += $amount;
    }
}

$car1 = new Car("BMW", 0);
$car2 = new Car("Audi", 0);

$car1->increaseMileage(240);