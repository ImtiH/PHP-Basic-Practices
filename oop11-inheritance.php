<?php


//INheritance



class jekono{

    public $ami = " Dujroy";


    public function afunction(){

        return " this is in a function";
    }
}

$aobject  = new jekono();

echo $aobject -> afunction();
echo $aobject -> ami;

echo "<br>";


class arektaclass extends jekono{ // means, amra jekono class ke extend korechi. So jekno class er sob kichu ei class a cole asbe.


}

$anotherobkect = new arektaclass();

//echo $anotherobkect -> ami; // It will show the value Durjoy

 $anotherobkect -> ami = " Hasan"; // We can assign new value.

echo $anotherobkect -> ami; // It will now show the value 'Hasan'
