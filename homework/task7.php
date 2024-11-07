<?php
// 1-esap
/*
$employees = [
["name" => "Jalal", "age" => 20, "department" => "Programming", "Salary" => 7000],
["name" => "Aybek", "age" => 24, "department" => "Marketing", "Salary" => 1500],
["name" => "Begis", "age" => 22, "department" => "SMM", "Salary" => 3000],
["name" => "Turar", "age" => 27, "department" => "Accouting", "Salary" => 5450],
["name" => "Ramazan", "age" => 23, "department" => "Legal", "Salary" => 1000]
];
$groupEmployee = array();
 
 foreach ($employees as $employee) {
    $department = $employee["department"];
    if(!isset( $groupEmployee[$department])) {
        $groupEmployee[$department] = array();
    }
    $groupEmployee[$department][] =$employee;
 }

function sortBySalary($a, $b) {
    return $b["Salary"] - $a["Salary"];
}
foreach ($groupEmployee as $department => $employees) {
    usort($employees, "sortBySalary");
    $groupEmployee[$department] = $employees;
}

print_r($groupEmployee);
*/


$employees = [
    ["name" => "Jalal", "age" => 20, "department" => "Programming", "Salary" => 7000],
    ["name" => "Aybek", "age" => 24, "department" => "Marketing", "Salary" => 1500],
    ["name" => "Begis", "age" => 22, "department" => "Marketing", "Salary" => 3000],
    ["name" => "Turar", "age" => 27, "department" => "Accounting", "Salary" => 5450],
    ["name" => "Ramazan", "age" => 23, "department" => "Legal", "Salary" => 1000],
    ["name" => "Ali", "age" => 25, "department" => "Programming", "Salary" => 6000],
    ["name" => "Fatima", "age" => 29, "department" => "Programming", "Salary" => 8000]
];

$groupEmployee = array();

foreach ($employees as $employee) {
    $department = $employee["department"];
    if (!isset($groupEmployee[$department])) {
        $groupEmployee[$department] = array();
    }
    $groupEmployee[$department][] = $employee;
}

function sortBySalary($a, $b)
{
    return $b["Salary"] - $a["Salary"];
}

foreach ($groupEmployee as $department => $employees) {
    usort($employees, "sortBySalary");
    $groupEmployee[$department] = $employees;
}

print_r($groupEmployee);

echo "<br><br>";
// 2-esap

$town = ["London", "Paris", "Madrid"];
$xaliq = [134000, 431250, 783305];

$capital = [
    $town[0] => $xaliq[0],
    $town[1] => $xaliq[1],
    $town[2] => $xaliq[2]
];

$megaTown = array_filter($capital, function ($item) {
    return $item >= 500000;
});

print_r($megaTown);

echo "<br><br>";

// 3-esap

$onim = [
    "Elektronika" => [
        ["name" => "Noutbook", "cena" => 200, "sani" => 70],
        ["name" => "iPhone", "cena" => 300, "sani" => 80]
    ],
    "Car" => [
        ["name" => "Gelik", "cena" => 600, "sani" => 70],
        ["name" => "BYD", "cena" => 400, "sani" => 90]
    ],
    "Mebel" => [
        ["name" => "Divan", "cena" => 150, "sani" => 40],
        ["name" => "Kreslo", "cena" => 250, "sani" => 30]
    ]
];

function getCategoryProduct($onim, $category)
{
    $categoryProducts = $onim[$category];
    usort($categoryProducts, function ($a, $b) {
        return $a["cena"] - $b['cena']; // bahasi boyinsha tartipleew
    });
    return $categoryProducts;
}

function filterByQuantity($onim, $minQuantity)
{
    return array_filter($onim, function ($item) use ($minQuantity) {
        return $item['sani'] >= $minQuantity; // sani boyinsha tartipleydi
    });
}
$sortedProducts = getCategoryProduct($onim, "Car");
print_r($sortedProducts);

$filteredProducts = filterByQuantity($sortedProducts, 80);
print_r($filteredProducts);

echo "<br>";
echo "<br>";

// 4-esap

$good = ["Jalal", "Aybek", "Begis"]; // exam tapsirgan studentler
$all = ["Jalal", "Aybek", "Begis", "Turar", "Ramazan"]; // barliq studentler

function getNonPassedstudent($good, $all)
{
    $filter = array_filter($all, function ($student) use ($good) {
        return !in_array($student, $good);
    });
    sort($filter); // Alfabit boyinsha
    return $filter;
}
$filter = getNonPassedstudent($good, $all);
print_r($filter);
 
echo "<br><br>";

// 5-esap

$sayt = [
    ["Cars", "Noutbook", "Book", "Phone"],
    ["Book", "Noutbook", "Phone"],
    ["Noutbook", "Book", "Phone"],
    ["Cars", "Book", "Phone"]
];


$counts = [];

foreach ($sayt as $say) {
    foreach ($say as $category) {
        if (!isset($counts[$category])) {
            $counts[$category] = 0;
        }
        $counts[$category]++; // Kategoriya bar bolsa birge kobeyedi
    }
}
arsort($counts);
$topCategory = array_slice(array_keys($counts), 0,3);
// array_slice en kop 3 kategoriyani saylap aladi
print_r($topCategory);
