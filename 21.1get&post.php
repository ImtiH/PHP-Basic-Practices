<?php

print_r($_POST); // GET and POST super globals are Array.

echo "<br>";

foreach ( $_POST as $single ){
    echo $single . "<br>";
}

echo "<br>";


//echo $_POST['name']; // Will show Error if we do not submit values.
echo $_REQUEST['name']; // POST and REQUEST same kaj kore.We will always use REQUEST.


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Get and Post </title>
</head>
<body>

   <form action="" method="POST">

       <label for="name">Name:</label>
       <input type="text" name="name" placeholder="Name">

       <label for="mail">Mail:</label>
       <input type="mail" name="mail" placeholder="Mail">

       <label for="contact">Contact:</label>
       <input type="text" name="contact" placeholder="Contact">

       <input type="submit" value="Submit">
   </form>


</body>
</html>
