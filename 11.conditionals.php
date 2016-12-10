<?php

if ( $value ){
    echo " the ans is positive. ";
}

else {
    echo" The ans is negative";  // No value has been defined for $value. so it will show an error and echo this message.
}


echo "<br>";
//--------

if ( $value  = 10  ) {
    echo " the ans is positive. ";  // Output will always be positive coz we are assigning 10 to the variable $value and as long as $value has any value, it will echo the messege.

}

echo "<br>";

//--------


$value = 10;

if ( $value == 11 ) {
    echo " the ans is equal. ";
}

else {
    echo " The ans is no equal ."; //SHow this text bcz  == means equal value.
}

echo "<br>";

//-------------


$value2 = "10"; // "10" is a string


if ( $value2 === 10 ){
    echo " The ans is equal ";

}

else {
    echo " The ans is not equal "; // Outut will show this messege bcz === means equal value and equal type.
}



echo "<br>";

//-------------


$value3 = 10;

if ( $value3 <> 11 ){  // <>  means not equal to ( !=)
    echo " The value is not equal ";
}

else
{
    echo " The value is equal ";
}




echo "<br>";
//----------



$value4 = 10;
$value5 = 20;

if ($value4 < 15 ){
    if ( $value5 > 10 ){
        echo " Logic is true ";
    }

    else {
        echo " Logic is false";
    }
}

echo "<br>";
// We can also codeit the following way

if ( $value4 < 15 && $value5 > 10  ) {
    echo " Logic is true";

}
else {
    echo " Logic is false ";
}



echo "<br>";
//----------

$value6 = 20;

if ( $value6 % 2== 0) {
    echo " The number is even ";
}

else {
    echo " The number is ODD ";
}


echo "<br>";
//----------


$result = 70;


if ( $result > 33 &&  $result <100){
    echo " Pass the exam";
}

else if ( $result < -1 && $result> 100 ) {
    echo " Invalid resutl ";
}

else {
    echo " Failed";
}


echo "<br>";
//----------

$result2 = 90;

if ( $result2 > 40 && $result2 < 50 ){
    echo "D";
}

elseif ( $result2 >= 50 && $result2 < 60 ){
    echo "C";
}

elseif  ( $result2 >= 60 && $result2 < 70 ){
    echo "B";
}

elseif  ( $result2 >= 70 && $result2 < 80 ){
    echo "A";
}


elseif ( $result < -1 && $result> 100 ) {
    echo " Invalid resutl ";
}

else {
    echo "A+";
}
