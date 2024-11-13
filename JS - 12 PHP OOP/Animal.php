<?php
// class Animal {
//     protected $name;

//     public function __construct($name) {
//         $this->name = $name;
//     }

//     public function eat() {
//         echo $this->name . " is eating.<br>";
//     }

//     public function sleep() {
//         echo $this->name . " is sleeping.<br>";
//     }
// }

// class Cat extends Animal {
//     public function meow() {
//         echo $this->name . " says meow!<br>";
//     }
// }

// class Dog extends Animal {
//     public function bark() {
//         echo $this->name . " says woof!<br>";
//     }
// }

// $cat = new Cat("Whiskers");
// $dog = new Dog("Buddy");

// $cat->eat();
// $dog->sleep();

// $cat->meow();
// $dog->bark(); 

class Animal {
    public $name;
    protected $age;
    private $color;

    public function __construct($name, $age, $color) {
        $this->name = $name;
        $this->age = $age;
        $this->color = $color;
    }

    public function getName() {
        return $this->name;
    }

    //Menambahkan metode publik untuk mengakses protected getAge()
    public function getAgePublic() {
        return $this->getAge();
    }

    //Menambahkan metode publik untuk mengakses private getColor()
    public function getColorPublic() {
        return $this->getColor();
    }

    protected function getAge() {
        return $this->age;
    }

    private function getColor() {
        return $this->color;
    }
}

$animal = new Animal("Dog", 3, "Brown");

echo "Name: " . $animal->getName() . "<br>";
echo "Age: " . $animal->getAgePublic() . "<br>";  // Memanggil metode publik
echo "Color: " . $animal->getColorPublic() . "<br>";
?>