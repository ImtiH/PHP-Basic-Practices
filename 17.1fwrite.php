<?php


$createfile =fopen("afile.txt","w") or die("File not found!!");
$name = "My name is Durjoy";
fwrite($createfile,$name);
fclose($createfile);

//It will create a file name afile.txt and put of text in $name variable in the afile.txt file.
