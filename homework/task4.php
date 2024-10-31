<?php
// 1-esap
$age = 80;

if ($age < 18) {
  echo "Ruqsat joq";
} else if ($age <= 70) {
  echo "Ruqsat";
} else {
  echo "Old person";
}

// 2-esap

echo "<br>";
echo "<br>";

$ball = 45;

if ($ball < 50) {
  echo "Jig'ildi";
} else if ($ball <= 69) {
  echo "Qaniqarli";
} else if ($ball <= 88) {
  echo "Jaqsi";
} else {
  echo "Ayriqsha";
}
echo "<br>";
echo "<br>";

// 3-esap

$number = 44;
if ($number % 2 == 0) {
  echo "Jup san";
} else {
  echo "Taq san";
}

echo "<br>";
echo "<br>";

// 4-esap

$dayNumber = 1;

switch ($dayNumber) {
  case 1:
    echo "Monday";
    break;
  case 2:
    echo "Tuesday";
    break;
  case 3:
    echo "Wednesday";
    break;
  case 4:
    echo "Thursday";
    break;
  case 5:
    echo "Friday";
    break;
  case 6:
    echo "Saturday";
    break;
  case 7:
    echo "Sunday";
    break;
  default:
    echo "Bunday kun joq";
    break;
}

// 5-esap 
echo "<br>";
echo "<br>";


$number = 45;

if ($number >= 10 && $number <= 20) {
  echo " Nomer diapozonda";
} else if ($number > 20 && $number <= 50) {
  echo "Nomer ortasha";
} else {
  echo "Nomer basqa araliqta";
}

// 6-esap
echo "<br>";
echo "<br>";

$password = "mypas456";

if (strlen($password) < 8 && preg_match('/\d/', $passsword)) {
  echo "Parol qabil etiledi";
} else {
  echo "Parol shartke mas emes";
}
// 7-esap
echo "<br>";
echo "<br>";

$a = 45;
$b = 25;

if ($a > $b) {
  echo "First number more";
} else if ($a < $b) {
  echo "Second number";
} else {
  echo "Sanlar ten";
}
// 8-esap

echo "<br>";
echo "<br>";

$month = 11;

if ($month == 12 || $month >= 1 && $month <= 2) {
  echo "Winter";
} elseif ($month >= 3 && $month <= 5) {
  echo "Spring";
} elseif ($month >= 6 && $month <= 8) {
  echo "summer";
} elseif ($month >= 9 && $month <= 11) {
  echo "Autumn";
} else {
  echo "Wrong month number";
}

// 9-esap 

echo "<br>";
echo "<br>";

$str1 = "Hello";
$str2 = "Hello";

if ($str1 == $str2) {
  echo "Siziqlar birdey";
} else {
  echo "Siziqlar har turli";
}
// 10-esap

echo "<br>";
echo "<br>";

$login = "jalal";
$password = "7413";

if ($login == "jalal" && $password == "7413") {
  echo "Parol duris";
} else {
  echo "Parol qate";
}

// 11-esap

echo "<br>";
echo "<br>";

$year = 1924;

if (($year % 4 == 0 && $year % 100 != 0) || $year % 400 == 0) {
  echo "Kabisa jili";
} else {
  echo "Kabisa jili emes";
}

//12-esap
echo "<br>";
echo "<br>";

$a = 15;
$b = 5;
$operation = "-";

switch ($operation) {
  case "+":
    echo $a + $b;
    break;
  case "-":
    echo $a - $b;
    break;
  case "*":
    echo $a * $b;
    break;
  case "/":
    echo $b != 0 ?  $a / $b : "Nolge boliw qate";
    break;
  default:
    echo "Qate operatsiya";
}
echo "<br>";
echo "<br>";


// 13-esap 
$age = 19;
$dayOfweek = 5;

if ($age >= 18 && $dayOfweek >= 1 && $dayOfweek <= 5) {
  echo "Weekdays";
} else {
  echo "Weekend";
}
// 14-esap 

echo "<br>";
echo "<br>";

$a = 24;
$b = 54;
$c = 15;

$min = $a;

if ($b < $min) $min = $b;
if ($c < $min) $min = $c;

echo "En kishi san: $min ";

// 15-esap  

echo "<br>";
echo "<br>";

$x = 13;
$y = -3;

if ($x > 0 && $y > 0) {
  echo " Birinshi sherekte";
} elseif ($x < 0 && $y > 0) {
  echo "Ekinshi sherekte";
} elseif ($x < 0 && $y < 0) {
  echo "Ushinshi sherekte";
} elseif ($x > 0 && $y < 0) {
  echo "Tortinshi sherekte";
} elseif ($x == 0 && $y == 0) {
  echo "Tochka orayda jaylasqan";
} elseif ($x == 0) {
  echo "Tochka Y ta jaylasqan";
} elseif ($y == 0) {
  echo "Tochka X ta jaylasqan";
}
