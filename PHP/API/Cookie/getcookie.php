<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accessing Cookies with PHP</title>
</head>
<body>
    <?php
        if(isset($_COOKIE['username']) and isset($_COOKIE['password'])){
            $username = $_COOKIE['username'];
            $password = $_COOKIE['password'];
            echo "Username : $username <br>";
            echo "Password : $password <br>";
        }else{
            echo "Cookies Not Set";
        }
    ?>
</body>
</html>