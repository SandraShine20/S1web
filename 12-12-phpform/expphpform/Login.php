<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>
<body>
    <center>
        <h2><u>Login</u></h2>
    <form action="Login.php" method="POST">
        <table>
            <tr>
                <td><label for="">
                Username:&nbsp;&nbsp;&nbsp;</label></td>
                <td><input type="text" name="user" placeholder="Enter your username">
            </tr>
            <tr>
                <td> <label for="">
                Password:&nbsp;&nbsp;&nbsp;</label></td>
                <td><input type="password" name="pass" placeholder="Enter your password"></td>
            </tr>
            <tr>
               <td colspan="2"><input type="submit" value="Login" name="Login"></td> 
            </tr>
        </table>
        
        
        
    </form>
    <a href="Register.php">Create new account</a>
    </center>
    
</body>
</html>
<?php
     if(isset($_POST['Login']))
     {
         echo "haiiii";
         $username = $_POST['user'];
         $password = $_POST['pass'];
          
         $conn = mysqli_connect('localhost','root','','test1');
         if(!$conn)
         {
             echo "Connection Failed";
         }
         else
         {
            $q = "SELECT * FROM user WHERE Email = '$username' AND Password = '$password'"; // Not secure
            $query = mysqli_query($conn, $q);
             if (mysqli_num_rows($query) > 0) { 
                 // If credentials are correct, redirect to welcome page
                 header("Location: Welcome.php");
                 exit();
             } else {
                 // Show error if login fails
                 echo "Incorrect username or password.";
             }
         }
        } 
?>