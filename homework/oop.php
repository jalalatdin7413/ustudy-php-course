<?php
// bul OOP ushin misal 

class Car {
    private $model;
    private $price;

    public function __construct($model, $price) {
        $this->model = $model;
        $this->price = $price;
    }
    public function getModel() {
        return $this->model;
    }
    public function getPrice() {
        return $this->price;
    }

    public function setModel($model) {
        $this->model = $model;
    }
    public function setPrice($price) {
        $this->price = $price;
    }

}

$car = new Car("BMW CS", 50000);

echo "Model: " . $car->getModel() . "<br>";
echo "Price: " . $car->getPrice() . "<br>";

$car->setModel("Gelik");
$car->setPrice(76849);

echo "New Model: " . $car->getModel() . "<br>";
echo "New Price: " . $car->getPrice();
  

echo "<br>";
echo "<br>";

// Student's information

class Student {
    public string $fullName;
    public string $university;
    public string $kasb;
    private string $adress;

 public function about (): string 
 {
    return  "My fullname is {$this->fullName} and I'm studyind {$this->university}";
 }
  public function jumis (): string {
    return "I work {$this->kasb} at IT Park";
  }
 public function setAdress(string $adress)  {
 $this->adress = $adress;
 }
 public function getAress(): string {
    return $this->adress;
 }
 
}

 $student1 = new Student;
 $student1->fullName = "Ramanov Jalalatdin";
 $student1->university = "KarSU Math facility";
 $student1->kasb = "Programmer";
 $student1->setAdress("Nukus"); 

 print_r($student1);
 

 

