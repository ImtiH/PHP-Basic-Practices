<?php



$name = "Durjoy";
$location = "Dhaka";
$age  = 23;


printf( " My name is %s and I live in %s and my age is %d",$name,$location,$age );



echo "<br>";



function afunction(){


$name = "Durjoy";
$location = "Dhaka";
$age  = 23;


printf( " My name is %s and I live in %s and my age is %d",$name,$location,$age ); // printf means print hoye jawa. Echo / return not necessary.

}

afunction();


echo "<br>";


function a_function(){

$name = "Durjoy";
$location = "Dhaka";
$age  = 23;


return sprintf( " My name is %s and I live in %s and my age is %d",$name,$location,$age ); //sprintf means string printf. Means amra ekhon purotake string baniye fellam. Take return kore pore echo korechi.

}

echo a_function();
