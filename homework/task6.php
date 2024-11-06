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