//esap 1
<?php 
define("PI", 3.14159);
function calculateCircleArea($radius) {
    
    return PI*pow($radius, 2);
}
echo calculateCircleArea(7);

//2-esap

echo "<br>";

$name = "Jalalatdin";
$age = 20;
 
echo "My name is " . $name . " , My age " . $age . ", I'm programmer.";

//3-esap

echo "<br>";

 function calculate($a , $b){
    return "Summ:" . $a+$b . "<br>"
    "Aliw:" . $a-$b ."<br>"
    "Kobeytiw:" . $a*$b . "<br>"
   "Boliw:". $a/$b ;
}
  echo calculate(15, 5);

  //4-esap
  echo "<br>";


  define("Uzinliq" , 20);
  define("Eni", 15);

  function calculateTort() {
    return "Maydan esaplaw: " . Uzinliq*Eni . "<br>"
    "Perimetr esaplaw: " . 2*(Uzinliq+Eni);
  }
    echo calculate();

    //5-esap

    echo ",br>";

     function MathEsaplaw($a, $b) {
        return " Qosiw $a and $b =". $a+$b "<br>"
        "Aliw $a and $b =". $a-$b. "<br>" 
        "Kobeytiw $a and $b =". $a*$b. "<br>"
        "Boliw $a and $b =". $a/$b.;
    
        
     }
     echo MathEsaplaw(45, 15);
