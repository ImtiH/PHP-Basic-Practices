
<?php

    $name = $email = $website = $comment = $gender = " ";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        $name = validate($_POST['name']);
        $email = validate($_POST['email']);
        $website = validate($_POST['website']);
        $comment = validate($_POST['comment']);
        $gender = validate($_POST['gender']);


    echo "Name:"  .$name . "<br/>";
    echo "Email :" . $email . "<br/>";
    echo "Website : " . $website . "<br/>";
    echo "Comment: " .  $comment . "<br/>";
    echo "Gender: " .  $gender ;
    }

    function validate($data){

        $data = trim($data);
        $data =  stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }


?>

<!DOCTYPE HTML>
<html lang="en-US">
<head>
    <meta charset="UTF-8">
    <title>Form Validation in PHP</title>
</head>
<body>

    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"  method='POST'>

    <table>
    <tr>
        <td>Name</td>
        <td><input type="text" name="name" placeholder="your name" required /></td>
    </tr>
    <tr>
        <td>Email</td>
        <td><input type="email" name="email" placeholder="your email"/></td>
    </tr>
    <tr>
        <td>Website</td>
        <td><input type="text" name="website" placeholder="your web address"/></td>
    </tr>
    <tr>
        <td>Comemnt</td>
        <td><textarea rows="5" cols="17" name="comment"></textarea></td>
    </tr>
    <tr>
        <td>Gender</td>
        <td>
            <input type="radio" name="gender" value="male"/>Male
            <input type="radio" name="gender" value="female"/>Female
        </td>
    </tr>
    <tr>
        <td></td>
        <td>
            <input type="submit" name="submit" value="Submit" />
        </td>

    </tr>

<!--If the form is not validated,hackers can run JS code in your form fields, as the JS program will run, your site is exposed to hackers.
If the site is validated, JS code won't run and will execute as like any plain text. -->

    </table>

    </form>



</body>
</html>



