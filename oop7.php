<?php


class person{

    static $name = "Durjoy";

    static function set_password(){
        return self::$name;
    }
}

echo person::set_password();

//Kono static property ke jokhon same class er vitore method er moddhe use korbo tokhon this use na kore self:: use korte hobe.
