<?php

// Protected


class aclass{


    protected function afunction(){

        echo " This is a function text";
    }

    public function anotherfunction(){

        $this -> afunction();
    }
}

$aobject  = new aclass();

$aobject -> anotherfunction();


echo "<br>";

