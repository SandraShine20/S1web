<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Test PHP</title>
</head>
<body>
    <form action="" method="POST">
        <label for="name">
            Name:&nbsp;&nbsp;&nbsp;<input type="text" name="name" value="" placeholder="Enter your name"><br><br>
        </label>
        <label for="phone">
            Phone No:&nbsp;&nbsp;&nbsp;<input type="phone" name="phone" value="" placeholder="Enter your phone number:"><br><br>
        </label>
        <label for="email">
            E-mail:&nbsp;&nbsp;&nbsp;<input type="email" name="email" value="" placeholder="Enter your email"><br><br>
        </label>
        <label for="password">
            Password:&nbsp;&nbsp;&nbsp;<input type="password" name="password" value="" placeholder="Enter the password"><br><br>
        </label>
        <input type="submit" value="Register" name="register">
    </form>
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