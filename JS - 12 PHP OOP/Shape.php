<?php
//interface
interface Shape {
    public function calculateArea();
}

interface Color{
    public function getColor();
}

class Circle implements Shape, Color {
    private $radius;
    private $color;

    public function __construct($radius, $color) {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function calculateArea() {
        return pi() * pow($this->radius, 2);
    }

    public function getColor()
    {
        return $this->color;
    }
}

// class Rectangle implements Shape {
//     private $width;
//     private $height;

//     public function __construct($width, $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea() {
//         return $this->width * $this->height;
//     }
// }

// function printArea(Shape $shape) {
//     echo "Area: " . $shape->calculateArea() . "<br>";
// }

$circle = new Circle(5, "Blue");
//$rectangle = new Rectangle(4, 6);

// printArea($circle);
// printArea($rectangle);

echo "Area of Circle : " . $circle->calculateArea() . "<br>";
echo "Color of Circle : " . $circle->getColor() . "<br>";


//abstarct class
// abstract class Shape {
//     abstract public function calculateArea();
// }

// class Circle extends Shape {
//     private $radius;

//     public function __construct($radius) {
//         $this->radius = $radius;
//     }

//     public function calculateArea() {
//         return pi() * pow($this->radius, 2);
//     }
// }

// class Rectangle extends Shape {
//     private $width;
//     private $height;

//     public function __construct($width, $height) {
//         $this->width = $width;
//         $this->height = $height;
//     }

//     public function calculateArea() {
//         return $this->width * $this->height;
//     }
// }

// $circle = new Circle(5);
// $rectangle = new Rectangle(4, 6);

// echo "Area of Circle : " . $circle->calculateArea() . "<br>";
// echo "Area of rectangel : " . $rectangle->calculateArea() . "<br>";
?>