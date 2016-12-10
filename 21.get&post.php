<?php


    echo $_GET['name'];
echo "<br>";
    echo $_GET['mail'];
echo "<br>";
    echo $_GET['contact'];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Get and Post </title>
</head>
<body>

   <form action="" method="get">

       <label for="name">Name:</label>
       <input type="text" name="name" placeholder="Name">

       <label for="mail">Mail:</label>
       <input type="mail" name="mail" placeholder="Mail">

       <label for="contact">Contact:</label>
       <input type="text" name="contact" placeholder="Contact">

       <input type="submit" value="Submit">
   </form>

   <h4> The value in the form will be shown once you fill up the form and click on SUBMIT. Else it will show Error for php codes</h4>

</body>
</html>
