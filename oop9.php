<?php


class aclass{

    public function __construct(){

        echo " This is a  function. ";
    }
}

$aobject  = new aclass();

// Construct function will  run instantly once the class is instentiated.It does not require to be run manually.
echo "<br>";

class janina{

    public function __construct($name,$place){
        printf("My name is " . $name . " and I live in " .  $place );
    }

}

$arektavariable = new janina('Durjoy',"Bangladesh");
