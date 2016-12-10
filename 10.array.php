<?php


 $durjoy = array("ami","tumi","se");

echo $durjoy[0];


echo "<br>";

//------


$vat = array ( "We love vat","7%", '15%',"we hate vat ");

echo $vat[0] . " " . $vat[1] . " but " . $vat[3] . $vat[2];


echo "<br>";

//----------


$vat1 = array (

    ' We hate vat',
    '7.5%',
);


echo $vat1[0]. " " .  $vat[1];

echo "<br>";

//--------------
// key  => value

$details = array(

    'name' => "Durjoy",
    'profession' => 'Web Developer',
    'location' => 'Dhaka',
);



echo " My name is " . $details['name'] . " and my profession is  " . $details['profession'] . ". I live in " . $details['location'] ;

