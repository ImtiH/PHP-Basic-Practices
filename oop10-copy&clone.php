<?php

// Copy and CLone


class durjoy{

    public $name = "Imtiaz";

}


$first = new durjoy();
$second  = $first;


print_r($first); //both $first and $second will show the same value for $name.
print_r($second);

//echo $ins -> name;


echo "<br>";
//--------------------------


class durjoy2{

    public $name = "Imtiaz";

}


$jekono  = new durjoy2();
$jekono2 = $jekono;
$jekono2 -> name  = "Aneek";




echo $jekono  -> name; // the value for $name will be changed to "Aneek" for both $jekono and $jekono2, though we have changed it for $jekono2 only, This is called Copy .
echo $jekono2 -> name;


echo "<br>";
//-------------------------

class something{

    public $name = "Habijabi";

}


$anything = new something();
$konokichu  = clone $anything; // Not what we  have cloned the variable $anything, so the value for $anything and $konokichu will remain different.

$konokichu -> name ="ekta value";


echo $anything -> name;
echo $konokichu -> name;


