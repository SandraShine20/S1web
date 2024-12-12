<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="number" name="number" placeholder="Enter the number to find the factorial">
        <input type="submit">
        <input type="reset">
    </form>

<?php

    $x=$_POST["number"];
    function factorial($x)
    {
        if($x==0)
        {
            return 1;
        }
        else
        {
            return $x * factorial($x-1);
        }
        
    }
    echo "factorial is".factorial($x);


?>
</body>
</html>
