<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title> FORM </title>
</head>
<body>

   <form action="send5.php" method="post">

       <table>
           <tr>
               <td> <label for="name"> Name: </label></td>
               <td><input type="text" name="" placeholder="Name"></td>
           </tr>
           <tr>
               <td><label for="mail"> Mail: </label></td>
               <td><input type="mail" name="mail" placeholder="Mail"></td>
           </tr>
           <tr>
               <td><label for="address">Address: </label></td>
               <td><input type="address" name="address" placeholder="Address"></td>
           </tr>
           <tr>
               <td> <label for="from"> From: </label></td>
               <td><input type="mail" name="from" placeholder="From"></td>
           </tr>
           <tr>
               <td><label for="to"> To: </label></td>
               <td><input type="text" name="to" placeholder="To"></td>
           </tr>

           <tr>
               <td></td>
               <td><input type="submit" value="Submit" name="form"></td>
           </tr>
       </table>



   </form>

</body>
</html>
