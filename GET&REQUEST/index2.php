<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> Form and Mail Function </title>
</head>
<body>

    <form action="send2.php" method="post">
        <label for="subject"> Subject: </label>
        <input type="text" name="subject" placeholder="Subject">
<br>
        <label for="mail"> Mail: </label>
        <input type="mail" name="mail" placeholder="Mail">
<br>
        <label for="message"> Message: </label>
        <textarea name="message" id="" cols="20" rows="5" placeholder="message"></textarea>
<br>
        <input type="submit" name="form" value="Submit" >


    </form>


</body>
</html>
