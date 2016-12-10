<?php


class ami {

    public $name;
    public $age;

    public function afunction(){

        return 'This is a function';
    }

}

$me = new ami(); // instentiated the class
$me -> name = "Durjoy"; // we can assign the value outside the class as well.
echo $me -> name;


echo "<br>";
echo "<br>";

 $tumi = new ami(); // using the same class for multiple objects.
 $tumi -> age = 24;
echo  $tumi -> age;
echo "<br>";
echo $tumi -> afunction();


echo "<br>";
echo "<br>";
print_r($tumi);


echo "<br>";
var_dump($tumi);  // shows more detials about the object.

