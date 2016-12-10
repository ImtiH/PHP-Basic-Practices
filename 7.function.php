<?php


    function afunction(){
        echo "This is a function";
    }
    afunction();

    echo "<br>";


    function title(){
        echo " This is the title ";
    }

    function content(){
        echo " This is the content";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php title(); ?></title>
</head>
<body>
    <?php  content(); ?>


</body>
</html>
