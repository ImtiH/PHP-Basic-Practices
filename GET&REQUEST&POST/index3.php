<?php

// This is the second way of using mail function.Everything will be done from this page.
//First way is in index2.

if( isset ( $_REQUEST['subject']) ){

    $subject = $_REQUEST['subject'];
}


if( isset ( $_REQUEST['mail']) ){

    $mail =   $_REQUEST['mail'];
}


if( isset ( $_REQUEST['message']) ){

    $message =   $_REQUEST['message'];
}


if ( isset ( $_REQUEST['form']) ){
   // mail('hasan.durjoy@gmail.com',$subject,$message,$mail);

$to = "hasan.durjoy@gmail.com";
//$subject = "My subject";
//$txt = "Hello world!";
//$headers = "From: webmastertesting@example.com" . "\r\n" .
$headers = "From: $mail" . "\r\n" .
"CC: somebodyelse@example.com";

mail($to,$subject,$message,$headers);

    echo "Mail has been successfully sent";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Form and Mail Function </title>
</head>
<body>

    <form action="" method="post">
        <label for="subject"> Subject: </label>
        <input type="text" name="subject" placeholder="Subject">
<br>
        <label for="mail"> Mail: </label>
        <input type="mail" name="mail" placeholder="Mail">
<br>
        <label for="message"> Message: </label>
        <textarea name="message" id="" cols="20" rows="5" placeholder="message"></textarea>
<br>
        <input type="submit" name="form" value="Submit" >


    </form>

    <p class="warning"><?php


        if ( isset ( $_REQUEST['form']) ){

            echo " The mail has been sent. IT will show a Erro message on Local server, but will work on Live Server";
        }



    ?></p>



</body>
</html>
