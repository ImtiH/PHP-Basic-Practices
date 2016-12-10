<?php


$name = $_REQUEST['name'];
$mail = $_REQUEST['mail'];
$contact = $_REQUEST['contact'];


if ( isset ( $_REQUEST['form1']) ){  // is there is more than 1 form, we can use this condition to make sure that this form will work only when this form is submitted.

echo " Name: " . $name . "<br>";
echo " Mail: " . $mail . "<br>";
echo " Contact: " . $contact . "<br>";

}



