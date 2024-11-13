<?php
// example for OOP
// Nasil aliw
/*
class Animal {
    public function sound(): string {
        return "Some sound";
    }
}

class Dog implements Animal {
    public function sound () {
        return "Woof";
    }
}

$dog = new Dog();
echo $dog->sound();
*/
echo "<br><br>";
// Inkapsulatsiya 


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


class BankAccount
{
    private $balance = 0;

    public function deposit($amount)
    {
        if ($amount > 0) {
            $this->balance += $amount;
        }
    }
    public function getBalance()
    {
        return $this->balance;
    }
}
$account = new BankAccount();
$account->deposit(2500);
echo $account->getBalance();

echo "<br><br>";

// Polimorfizm 

interface Shape {
    public function area();
}

class Circle implements Shape {
    private $radius;

    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function area() {
        return pi() * pow($this->radius, 2);
    }
}
class Rectangle implements Shape {
    private $width, $height;

    public function __construct($width, $height) {
        $this->width = $width;
        $this->height = $height;
    }

    public function area() {
        return $this->width * $this->height;
    }
}

function printArea(Shape $shape) {
    echo $shape->area();
}

printArea(new Circle(5)); 
echo "<br>";
printArea(new Rectangle(5, 6));

echo "<br><br>";

// Abstrakciya 

abstract class Vehicle {
    abstract public function startEngine(); 

    public function stopEngine() {
        echo "Engine stopped";
    }
}

class Car extends Vehicle {
    public function startEngine() {
        echo "Car engine started";
    }
}

$car = new Car();
$car->startEngine();

echo "<br><br>";

// SOLID ushin misallar 
// single responsibility 

class User {
    public $name;
    public $email;
}

class UserRepository {
    public function save(User $user) {

    }
}

$user = new User();
$user->name = "Jalal";
$user->email = "ramanovjalal@gmail.com";

print_r($user);