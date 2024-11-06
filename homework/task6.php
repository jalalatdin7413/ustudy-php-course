<?php
// 1-esap

$element = [3, 8, 5, 9, 2];
foreach ($element as $n) {
    echo $n . "<br>";
}

echo "<br>";
echo "<br>";
// 2-esap

$hapte = [
    "Monday"  => 1,
    "Thursday" => 2,
    "Wednesday" => 3,
    "Tuesday" => 4,
    "Friday" => 5,
    "Saturday" => 6,
    "Sunday" => 7
];
/*
   $keys = array_keys($hapte);

   var_dump($keys);
  */
echo $hapte["Sunday"];

echo "<br>";
echo "<br>";

// 3-esap

/*
   $people = [
    ["name" => "Jalalatdin",
     "age" => "20",
     "lawazim" => "junior programmer"
    ], 
   [ "name" => "Aybek",
     "age" => 19,
     "lawazim" => "injener"
    ],
     ["name" => "Begis",
      "age" => 21,
      "lawazim" => "teacher"
    ],
      ["name" => "Jaras",
       "age" => 23,
       "lawazim" => "leytenant"
       ]
   ];
   foreach ($people as $employee)  {
    
    echo  "{$employee['name']}, {$employee['age']}, {$employee['lawazim']}\n;
   
   }
   */
echo "<br>";
echo "<br>";

// 4-esap

$numbers = [34, 43, 64, 23, 19, 62, 73, 14, 7, 98];

sort($numbers);
print_r($numbers);

echo "<br>";
echo "<br>";

// 5-esap
 $miywe = [
    "fruits" => ["apple", "cherry", "pear"],
    "vegetables" => ["potato", "carrot", "onion"],
    "grains" => ["corn", "wheat", "barley"],
    "nuts" => ["bean", "pea", "walnut"]
 ];
  print_r($miywe);

  echo "<br>";
  echo "<br>";

  // 6-esap

  $students = [
    ["name" => "Jalal", "math" => 86, "english" => 84],
    ["name" => "Begis", "math" => 78, "english" => 90],
    ["name" => "Aybek", "math" => 88, "english" => 88]
  ];
  $totalMath = $totalenglish = 0;
  foreach ($students as $student)  {
    $totalMath += $student['math'];
    $totalEnglish += $student['english'];
}
echo "Ortasha math: " . ($totalMath) / count($students) . "\n";
echo "Ortahsha english: " . ($totalEnglish) / count($students) . "\n";

echo "<br>";
echo "<br>";
// 7-esap

$massiv = ["Alma", "Banan", "Apelsin"];

echo implode(", ", $massiv);

echo "<br>";
echo "<br>";

// 8-esap

$sanlar = [5, 3, 4, 7, 9];

array_push($sanlar, 45, 55);
print_r($sanlar);

echo "<br>";
echo "<br>";
// 9-esap 

 $country = [
    "Angliya" => "London",
    "Rossiya" => "Moskva",
    "Kazakhstan" => "Astana",
    "Portugal" => "Lissabon"
 ];
  echo $country["Rossiya"];

  echo "<br><br>";
  // 2-usil

  /*$countries = ["France" => "Paris", "Spain" => "Madrid", "England" => "London"];
  function getCapital($country) {
    global $country;
    return $countries[$country] ?? "England";
  }
  echo getCapital("England");
*/
echo "<br><br>";



// 10-esap
$chessBoard = [
    ["T", "A", "Q", "W", "K", "Q", "A", "T"],
    ["P", "P", "P", "P", "P", "P", "P", "P"],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["", "", "", "", "", "", "", ""],
    ["p", "p", "p", "p", "p", "p", "p", "p"],
    ["t", "a", "q", "w", "k", "q", "a", "t"],
];
foreach ($chessBoard as $row) {
    echo implode(" ", $row) . "\n";
}

echo "<br><br>";

// 11-esap

$studentler = [
    "Jalal" => 90,
    "Begis" => 88,
    "Aybek" => 84,
    "Turar" => 80,
    "Ramazan" => 78
];
 $topScore = max($studentler);
 $topPerson = array_search($topScore, $studentler);

 echo "Top student: $topPerson with $topScore ball";

 echo "<br><br>";

 // 12-esap

 $nameS = ["Ronaldo", "Benzama", "Bale", "Ramos", "Marcelo"];

 sort($nameS);
 print_r($nameS);

echo "<br><br>";

// 13-esap

$holiday = [
    "Kross" => ["07-07-2024", "09-09-2024"],
    "Modric" => ["05-05-2024", "08-08-2024"],
    "Guler" => ["15-09-2024", "23-10-2024"]
];
print_r($holiday);

echo "<br><br>";

// 14-esap

$numberS = [45, 24, 76, 93, 88];
$sAn = array_filter($numberS, fn($num) => $num %2 === 0);
print_r($sAn);

echo "<br><br>";

// 15-esap 

$months = [
    "January" => 31,
    "February" => 29,
    "March" => 31,
    "April" => 30,
    "May" => 31,
    "June" => 30,
    "July" => 31,
    "August" => 31,
    "September" => 30,
    "October" => 31,
    "November" => 30,
    "December" => 31
];
print_r($months["February"]) ;
echo "<br>";
echo "<br>";
echo "Days of February: " . $months["February"];

echo "<br>";
echo "<br>";

// 16-esap

$tablica = [
    "Monday" => ["9:00" => "Math", "11:00" => "English" ],
    "Friday" => ["11:00" => "Filolofiya", "15:00" => "Biologiya"]
];
print_r($tablica["Monday"]);

echo "<br><br>";

// 17-esap

$sanLar = [34, 23, 14, 71, 19, 25, 17, 45, 72];
$nomer = array_sum($sanLar);
print_r($nomer);

echo "<br><br>";

// 18-esap

$books = [
  
    
];
