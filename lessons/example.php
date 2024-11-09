<?php

function factorial(int $n) {
    if ($n <= 1) {
        return 1;
    }
    return $n * factorial($n - 1);
}
 echo factorial(6);

 echo "<br>";
 echo "<br>";

 function numbers () {
    for ($i = 0; $i <= 5; $i++) {
        yield $i;
    }
 }
  
  foreach (numbers() as $number) {
    echo $number . "<br>";
  }

  echo "<br>";
  echo "<br>";

  set_error_handler(function ($errno, $errstr) {
    echo "Qa'telik: [$errno, $errstr";
  });
  // Prostoy massivler 

  $numbers = [2, 3, 4, 6, 8];

  $squeredNumbers = array_map(function ($number) {
    return $number * $number ;
  }, $numbers);

   var_dump($squeredNumbers);

   echo "<br>";
   echo "<br>";

   $sanlar = [45, 54, 65];

   $kvSan = array_map( function ($number) {
    return $number * $number;
   }, $sanlar);

   var_dump ($kvSan);

   echo "<br>";
   echo "<br>";
   
   $evenSan = array_filter($sanlar , function ($value) {
    return $value %2 == 0;
   });

   var_dump($evenSan);
   
   
   
   
   
   