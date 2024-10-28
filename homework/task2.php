// 1-esap
<?php 
$Name="Cristiano Ronaldo";
$jasi =39;
$mamleketi="Portugaliya";

echo " My name is $Name, My age of $jasi, I live in $mamleketi.";

// 2-esap
<?php

$productAti = "palaw";
$porsi =3;
$bahasi=15.55;
$Obedte =true;

echo gettype($productAti). "\n"; //harip
echo gettype($porsi). "\n"; //porsi sani
echo gettype($bahasi). "\n"; //neshe som
echo gettype($Obedte). "\n"; //bar yaki joq

?>

// 3-esap

<?php

$productAti = "palaw";
$porsi =3;
$bahasi=15.55;
$Obedte =true;

echo gettype($productAti). "\n"; //harip
echo gettype($porsi). "\n"; //porsi sani
echo gettype($bahasi). "\n"; //neshe som
echo gettype($Obedte). "\n"; //bar yaki joq

?>

//4-esap

<?php
$toliqsan = 3050;
$boliwshi =606;

echo " Qosindisi:". ($toliqsan+$boliwshi)."\n";
echo " Aliwdag'i manisi:". ($toliqsan-$boliwshi)."\n";
echo " Kobeytiw:". ($toliqsan*$boliwshi). "\n";
echo " Boliwshi:". ($toliqsan/$boliwshi). "\n";
 ?>

 // 5-esap


 <?php

 $Var ="Real Madrid";
 
 if(is_int($Var)) {
     echo " $Var-bul putin san.\n";
 } elseif(is_string($Var)) {
     echo " $Var-this club the best team in the world.\n";
 } elseif(is_bool($Var)) {
     echo " $Var- bul bar yaki joq.\n";
 }