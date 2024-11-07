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

function sortBySalary($a, $b) {
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