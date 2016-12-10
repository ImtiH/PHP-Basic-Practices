<?php



fopen("jekonofile.html","w+");

// If we run this, a file with the name jekonofile.html will be created.
// Details: http://www.w3schools.com/php/func_filesystem_fopen.asp


$name = "Imtiaz";
$age  = 23;

$file = fopen('ektafile.html','w+'); // it will create a file with the name ektafile.html

fprintf($file,"My name is %s and my age is %s",$name,$age); // the fprintf function will write this message in the ektafile.html file.

