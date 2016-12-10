<?php


if ( isset( $_GET['name'] )   &&   isset($_GET['profession'] )  ){
    echo " My name is ". $_GET['name'] . " My profession is " . $_GET['profession'];
}

else {
    echo " The value hasn't been set ";
}


//http://localhost/php/20.1querystring.php?name=Durjoy&profession=Dhaka
