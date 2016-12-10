<?php


$bio = array(

    'name' => "imtiaz",
    'lcoation' => 'Dhaka',

);


echo " AMar name hocche {$bio['name']}";

//-----------------
//heredocs
//EOT er age and pore sspace thaka jabena
// EOT and TXT , EOD  same kaj kore but EOT is more standard.


$portfolio = "Portfolio"; // HTML er vitor PHP use kora jabe.
$content = <<<EOT


    <ul>
        <li><a href="">Home</a></li>
        <li>About US </li>
        <li >Contact </li>
        <li >$portfolio</li>
    </ul>

EOT;

echo $content;


