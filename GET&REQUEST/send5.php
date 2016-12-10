<?php


 if ( isset ( $_REQUEST['form']) ){

     if ( isset ($_REQUEST['name']) ){
         $name = $_REQUEST['name'];
     }

     if ( isset ($_REQUEST['mail']) ){
         $mail = $_REQUEST['mail'];
     }

     if ( isset ($_REQUEST['address']) ){
         $address = $_REQUEST['address'];
     }

     if ( isset ($_REQUEST['from']) ){
         $from = $_REQUEST['from'];
     }

     if ( isset ($_REQUEST['to']) ){
         $to = $_REQUEST['to'];
     }




    $to = "hasan.durjoy@gmail.com";
     $subject = "New Personal Info";

     $message = " This user provided followng information:"  . "\n";
     $message .= "Name: $name " . "\n"; // name jkaj korena. kano janina.
     $message .= "Mail: $mail"  . "\n" ;
     $message .= "Address: $address"  . "\n";
     $message .= "From: $from"  . "\n";
     $message .= "To: $to"  . "\n";


     mail($to,$subject,$message,"From:jekono@gmail.com");


    echo " Mail ahs been sent successfully";


 }


