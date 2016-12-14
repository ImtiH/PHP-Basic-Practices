<?php

//global variables van be accessed from inside the function(if declared outside the function) or from outside the function (if declared inside the function)
// Super Globals are some built in function of PHP that can be accessed from anywhere/any file of the project.

 $something  = " A variable"; // this variable is outside the funnction.


function a_function(){

    global  $something; // we made the varibale global to make it work inside the function.
    echo $something;
}

a_function();


echo "<br>";





function anything(){

    $anything  = " this is local variable"; // This varibale is declared inside the function. So it will work. this is called local variable.
    echo $anything;


}
anything();


echo "<br>";


function nothing(){

    global $nothing; // we are making this variable global to make it workable outside the function.
     echo $nothing  =  " This is to check if local variable works outside functin";
}

nothing();

//echo $nothing;


echo "<br>";


$example = " This is a variable";

function ami(){

    echo $GLOBALS['example']; // Super Globals

}

ami();

