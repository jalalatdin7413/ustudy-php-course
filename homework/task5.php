<?php
// 1-tapsirma 1-esap

$a = 43;
if ($a % 2 == 0) {
    echo "Jup san";
} else {
    echo "Taq san";
}
// 2-esap

echo "<br>";
echo "<br>";

$age = 17;

if ($age >= 18) {
    echo "Ulken jasta";
} else {
    echo "Jasi kishi";
}
// 3-esap

echo "<br>";
echo "<br>";

$text = "jalal2004";

if (strlen($text) < 10) {
    echo "Qisqa";
} else {
    echo "Uzin";
}
// 4-esap
echo "<br>";
echo "<br>";

$time = date("15:00"); // usig'an onsha tusinbedim
if ($time >= "6:00" && $time <= "18:00") {
    echo "Ku'ndiz";
} else {
    echo "Evening";
}
// 5-esap
echo "<br>";
echo "<br>";

$login = "Micheal";
$parol = "2348";

if ($login == "Micheal" && $parol == "2345") {
    echo "Kiriwge ruqsat";
} else {
    echo "Parol qate";
}

echo "<br>";
echo "<br>";

// Cikl boyinsha 1-esap

$sum = 0;

for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
}
echo "1 den 100 ge shekemgi sanlar qosindisi: " . $sum;

// 2-esap
echo "<br>";
echo "<br>";
$number = 7;
for ($n = 1; $n <= 10; $n++) {
    echo "$number x $n =" . ($number * $n) . "<br>";
}
// 3-esap
echo "<br>";
echo "<br>";

$san = [43, 93, 55, 23, 12];
$min = $san[0];
foreach ($san as $n) {
    if ($n < $min) {
        $min = $n;
    }
}
echo "Kishi san: $min";

// 4-esap
echo "<br>";
echo "<br>";
$num = 5;
$faktorial = 1;
$n = 1;

while ($n <= $num) {
    $faktorial *= $n;
    $n++;
}
echo "Faktorial $num: $faktorial";

// 5-esap 
echo "<br>";
echo "<br>";

$sum = 0;
 for ($n = 1; $n <= 50; $n++) {
    if ($n %2 == 0) {
        $sum += $n;
    }
 }
 echo "1 den 50 ge shekemgi jup sanlar summasi: $sum";
 
  // 6-esap

  echo "<br>";
  echo "<br>";

  $a = 10;
  do {
    echo $a . "<br>";
    $a--;
  } while ($a >= 1);

  // 7-esap

  echo "<br>";
  echo "<br>";

  $num = [22, -45, 23, 31, -11];
  foreach ($num as $index => $n) {
    if ($n < 0) {
        echo "Birinshi en kishi san: $n ideksi $index ";
        break;
    }
  }
  // 8-esap
  echo '<br>';
  echo '<br>';

  for( $n = 1; $n <= 20; $n += 2) {
    echo $n . "<br>";
  }
  echo "<br>";
  echo "<br>";

  // 9-esap

   $text = "Karakalpakstan";
   for ($n = 0; $n < strlen($text); $n++) {
    echo $text[$n] . "<br>";
   }
   echo "<br>";
   echo "<br>";

   // 10-esap
   $massiv = [2, -5, 6, -9, 3, -7];
   $positiveCount =0;
   $negativeCount = 0;
   foreach ($massiv as $n) {
    if ($n > 0) {
        $positiveCount++;
    } elseif ($n < 0) {
        $negativeCount++;
    }
   }
    echo "On' sanlar: $positiveCount, Teris sanlar: $negativeCount";
    
    echo "<br>";
    echo "<br>";
    // 11-esap
    $n = 2;
    while ($n <= 10) {
        echo $n . "<br>";
        $n += 2;
    }
    echo "<br>";
    echo "<br>";
    // 12-esap 

    $number = 16;
    $isPrime = true;
    for ($n = 2; $n <= sqrt($number); $n++) {
        if ($number % $n == 0) {
            $isPrime = false;
            break;
        }
    }
     echo $isPrime ? "$number apiwayi" : "$number quramali";