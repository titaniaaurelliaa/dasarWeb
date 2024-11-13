<?php
// class Car{
//     public $brand;

//     public function startEngine(){
//         echo "Engine started!";
//     }
// }

// $car1 = new Car();
// $car1->brand = "Toyota";

// $car2 = new Car();
// $car2->brand = "Honda";

// $car1->startEngine();
// echo $car2->brand;

class Car {
    private $brand;

    public function __construct($brand) {
        echo "A new car is created.<br>";
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function __destruct() {
        echo "The car is destroyed.<br>";
    }
}

$car = new Car("Toyota");
echo "Brand : " . $car->getBrand() . "<br>";
?>