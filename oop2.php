<?php


 class jekono{

     private $name  = "Durjoy";


     public function afunction(){

         return $this -> name; // by returning this in a public function, now we can use the private variable.
     }
 }

$ins = new jekono();
echo $ins -> afunction();

