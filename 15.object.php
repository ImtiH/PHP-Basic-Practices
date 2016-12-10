<?php


class ami{ // class

    public $hand  = 2; // property
    public $eyes = 4;

    public function cando(){ // method

        echo " I can walk";

        echo "<br>";

        return $this->eyes;  // Means, this $eyes variable is declares inside the class.
    }
}

$durjoy = new ami();  // object

echo $durjoy -> hand;

echo "<br>";

 $durjoy -> cando(); // Since we did echo the function earlier, we don't have to echo it now. | It will not show the result which has not been echoed.

echo "<br>";

echo $durjoy -> cando();  // Now that we have echoed it , so it shows both echo and return result.


//--------------

echo "<br>";


class tumi{

    public function __construct(){ // double underscroe (__)
        echo " My name is Durjoy";
    }

}

$ektavariable = new tumi();
//$ektavariable; // dorkar nai

//NOTE: Jodi amra cai object babanor sathe sathe kichu jinis automatically kaj kora suru korbe tokhon e amra construct function use kore tar vitor jeguloke kaj korate cai segulo lekhbo.



//--------------

echo "<br>";


class janina{

    public function __construct($name,$place){
        printf("My name is %s and I live in %s",$name,$place);
    }

}

$arektavariable = new janina('Durjoy',"Bangladesh");








