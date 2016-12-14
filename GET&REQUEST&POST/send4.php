<?php

if ( isset( $_REQUEST['mail']) ){

    $mail = $_REQUEST['mail'];
}


if ( isset ( $_REQUEST['subscribe']) ){

    if( isset ( $_REQUEST['mail']) ) {

//        mail('hasan.durjoy@gmail.com','New Subscribers',$mail );
        mail('hasan.durjoy@gmail.com','New Subscribers',$mail,"From:shahrukhkhan@gmail.com" );
    }
}
