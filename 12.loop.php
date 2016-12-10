<?php


$content  = 10;

echo $content += 1;

echo '<br>';

echo ++$content;

echo '<br>';

echo $content = $content + 1;

echo '<br>';

echo $content++;

//--------

echo '<br>';
echo "............";
echo '<br>';

$content2 = 10;

while ( $content2 <= 20 ){
    echo $content2++ . "<br>";
}


//--------

echo '<br>';
echo "............";
echo '<br>';

// While LOOP


$i = 1;
while ( $i <= 20){

    if ( $i % 2 == 0 ){
        echo " $i is even " . "<br>" ;
//        $i++;
    }
    else {
        echo " $i is odd " . "<br>";
//        $i++;
    }

    $i++;
}



//--------

echo '<br>';
echo "............";
echo '<br>';

// FOR  LOOP



for ($i = 0 ; $i < 20; $i++){

    if ( $i % 2 == 0 ){
        echo " $i is even " . "<br>" ;
    }
    else {
        echo " $i is odd " . "<br>";
    }

}



//--------

echo '<br>';
echo "............";
echo '<br>';

// FOREACH  LOOP

$values  = array ("My", "name", "is", "Durjoy");


foreach( $values as $value){
    echo $value . "<br>";
}



//--------

echo '<br>';
echo "............";
echo '<br>';


$values = array (

    'name' => "Durjoy",
    'profession' => "Web Developer",
    'location' => "Dhaka",
);


foreach( $values as  $key => $value){

    echo $key . '<br>';
}



echo '<br>';
echo "............";
echo '<br>';



foreach( $values as  $key => $value){

    echo "My " . $key . " is " . $value . "<br>";
}


