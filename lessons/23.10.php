<?php
/*
define("PI", 3.13159);

function MaydanEsaplaw($radius)
{
  // R=PI*$radius^2;
}

MaydanEsaplaw(5);
echo MaydanEsaplaw(5);

// task 2

$name = "Jalalatdin";
$age = 20;

echo "Menin atim $name, jasim $age da." . "<br>";

// task3

function calculate($a, $b)
{
  return "<br>" .
    "Kobeymesi:" . $a + $b . "<br>" .
    "Qosindisi :" . $a - $b . "<br>" .
    "Ayirmasi :" . $a * $b . "<br>" .
    "Boliniwi :" .

    $a / $b . " <br>";
}

echo calculate(23, 5);
*/

$chessBoard = [
  ["R", "N", "B", "Q", "K", "B", "N", "R"],
  ["P", "P", "P", "P", "P", "P", "P", "P"],
  ["", "", "", "", "", "", "", ""],
  ["", "", "", "", "", "", "", ""],
  ["", "", "", "", "", "", "", ""],
  ["", "", "", "", "", "", "", ""],
  ["p", "p", "p", "p", "p", "p", "p", "p"],
  ["r", "n", "b", "q", "k", "b", "n", "r"],
];
foreach ($chessBoard as $row) {
  echo implode(" ", $row) . "\n";
}