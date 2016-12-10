<?php

class aclass{

    public $username;
    public $password;

    public function afunction(){
        $this -> password = "123456"; // class er vitore variable ke access kroar jonno $this use korte hobe.
    }


}

$ins = new aclass();
$ins -> afunction();

echo $ins -> password;
