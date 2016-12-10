<?php

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
