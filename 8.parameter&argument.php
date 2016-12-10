<?php

    function a_function($value){
        echo " This is " . $value;  // Parameter
    }

    function name($name,$profession){
        echo "My name is " . $name . " and I am a " . $profession;
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php a_function("title");  // Argument. Write the argument value inside quotation. ?></title>
</head>
<body>

    <h1><?php a_function("content"); ?></h1>
    <h1><?php a_function("23"); ?></h1>
    <h1><?php a_function(23); ?></h1>


    <p><?php name("Durjoy","Web Developer"); ?></p>

</body>
</html>
