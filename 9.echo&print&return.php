<?php

    echo "MY name is Durjoy";
    print "My name is Durjoy";

echo " My name is " , "Durjoy"; // Kaj korbe
//print " My name is " , "Durjoy"; // Kaj korbena


echo " My name is " . "Durjoy";
print " My name is " . "Durjoy";


function a_function(){
    return " My name is Durjoy";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> This is title </title>
</head>
<body>

    <h3><?php echo a_function(); ?></h3>
    <h2><?php print a_function(); ?></h2>
    <h4><?php print_r(a_function()); ?></h4>


</body>
</html>
