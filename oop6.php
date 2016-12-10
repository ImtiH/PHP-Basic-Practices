<?php


//Static propert and MEthod


class durjoy{

    static $name  = "Durjoy";

    static function jekono(){

        return " It's a line in a function";

//        return self::$name; // Nothing shows for this one.
    }
}

echo durjoy::$name;

echo "<br>";

echo durjoy::jekono();
