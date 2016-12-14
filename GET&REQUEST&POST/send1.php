<?php


if ( isset ( $_REQUEST['name']) ){

    $name =  $_REQUEST['name'];
}


if ( isset ( $_REQUEST['mail']) ){

    $mail =  $_REQUEST['mail'];
}


//if ( isset ( $_REQUEST['contact']) ){
//
//    $contact =  $_REQUEST['contact'];  // evabe alada na kore amra ditect nicer moto conditioner vitorei eta likhte pari. Both works.
//}



if ( isset ( $_REQUEST['form1']) ){

    echo " Name: " . $name . "<br>";
    echo " Mail: " . $mail . "<br>";

}

else if ( isset ( $_REQUEST['form2']) ){

//    echo " Contact: " .  $contact . "<br>";

    if ( isset ( $_REQUEST['contact']) ){

       echo "Contact: " .   $_REQUEST['contact'];

    }

}
