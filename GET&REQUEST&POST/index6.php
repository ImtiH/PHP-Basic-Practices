<?php

if($_SERVER['REQUEST_METHOD'] == "POST"){

    $name = $_REQUEST['name'];
    $mail = $_REQUEST['mail'];
}

if(empty($name) && empty($mail)  ){

    echo "<span style='color:red'>Username and Mail must not be empty</span>";
}
elseif(empty($name)){

    echo "<span style='color:red'>Name must not be empty</span>";
}
elseif(empty($mail)){

    echo "<span style='color:red'>Mail must not be empty</span>";
}
else {
    echo "<span style='color:green'>You have submitted Name -  $name and Mail - $mail successfully. </span>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> POST and REQUEST </title>
</head>
<body>

    <form action="<?PHP echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name"> Name: </label>
        <input type="text" name="name" placeholder="Name">
<br>
        <label for="mail"> Mail: </label>
        <input type="mail" name="mail" placeholder="mail">
<br>
        <input type="submit" name="form" value="Submit">
    </form>

<!--
    <form action="send1.php" method="post">
        <label for="conatct"> Conatct: </label>
        <input type="contact" name="contact" placeholder="Contact">


        <input type="submit" name="form2" value="Submit">
    </form>
-->


</body>
</html>
