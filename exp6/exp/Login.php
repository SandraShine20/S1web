<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <form action="">
        <label for="">
            Username:&nbsp;&nbsp;&nbsp;<input type="text" name="user" placeholder="Enter your username"><br><br>
        </label>
        <label for="">
            Password:&nbsp;&nbsp;&nbsp;<input type="password" name="pass" placeholder="Enter your password"><br><br>
        </label>
        <input type="button" value="Login" name="login">
    </form>
</body>
</html>
<?php
    if(isset($_POST['login']))
    {
        $username = $_POST['user'];
        $password = $_POST['pass'];
         
        $conn = mysqli_connect('localhost','root','','test1');
        if(!$conn)
        {
            echo "Connection Failed";
        }
        else
        {
            $q="SELECT * FROM user where Email=$username AND Password=$password";
            $query = mysqli_query($conn, $q);
             
            if(mysqli_num_rows($query)>0)
            {
                $row = mysqli_fetch_assoc($query);
            }
        }        
    }
?>