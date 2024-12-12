<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <center>
    <h2></u>Regiter</u></h2>   
    <form action="Register.php" method="POST">
    <table>
        <tr>
            <td><label for="name">
            Name:</label></td>
            <td><input type="text" name="name" value="" placeholder="Enter your name"></td>
        </tr>
        <tr>
            <td><label for="phone">
            Phone No:&nbsp;&nbsp;&nbsp; </label></td>
            <td><input type="phone" name="phone" value="" placeholder="Enter your phone number:"></td>
        </tr>
        <tr>
            <td><label for="email">E-mail:&nbsp;&nbsp;&nbsp;</label></td>
            <td><input type="email" name="email" value="" placeholder="Enter your email"></td>
        </tr>
        <tr>
            <td> <label for="password">Password:&nbsp;&nbsp;&nbsp;</label></td>
            <td><input type="password" name="password" value="" placeholder="Enter the password"></td>
        </tr> 
        <tr>
            <td colspan="2">
            <input type="submit" value="Register" name="register"></td>
        </tr>

    </table> 
    </form>
    <a href="Login.php">Account already existing!</a>
    </center>
</body>
</html>
<?php
    if(isset($_POST['register']))
    {
        $name=$_POST['name'];
        $phone=$_POST['phone'];
        $email=$_POST['email'];
        $password=$_POST['password'];
        
        $conn=mysqli_connect('localhost','root','','test1');
        if(!$conn) 
        {
            echo "CONNECTION FAILED";
        }
        else
        {
            $q="INSERT INTO user (Name,Phone,Email,Password) VALUES ('$name','$phone','$email','$password')";
            $query=mysqli_query($conn, $q);
        }
    }
?>