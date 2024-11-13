<?php 

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


interface Animal {
    public function makeSound();
} 
class Dog implements Animal {
    public function makeSound() {
        echo "Woof! Woof! <br>";
    }
}
class Cat implements Animal {
    public function makeSound() {
           echo "Meow! Meow! <br>";
    }
}   
 
$dog = new Dog(); // object jaratiw
$cat = new Cat();

$dog->makeSound();
$cat->makeSound();

echo "<br><br>";

interface Transport {
    public function start();
    public function stop();
}

class Car implements Transport {
    public function start() {
        echo "Car started <br>";
    }
    public function stop() {
        echo "Car stopped <br>";
    }
}
 class Bus implements Transport {
    public function start () {
        echo "Bus started <br>";
    }
    public function stop () {
        echo "Bus stopped";
    }
 }


 $bus = new Bus();
 $car = new Car();

 $car->start();
 $car->stop();

  echo "<br>";

 $bus->start();
 $bus->stop();

 echo "<br>";
 echo "<br>";

 interface Payment {
    public function pay($amount);
 }
 class Payme implements Payment {
    public function pay($amount) {
        echo "To'lew $amount summani payme arqali <br>";
    }
 }
 class Paynet implements Payment {
    public function pay($amount) {
        echo "Kommunalga $amount sumdi paynetten tolew <br>";
    }
 }
 $payme = new Payme();
 $paynet = new Paynet();

 $payme->pay(300);
 $paynet->pay(340);

 echo "<br><br>";

 // D - Dependency Inversion Principle ushin misal 

 

