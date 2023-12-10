<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET Method</title>
</head>
<body>
    <?php 
        if(isset($_GET["submit"])){
            echo "Welcome " . $_GET["name"] . "<br>";
            echo "Your email address is: " . $_GET["email"];

            exit();
        }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="GET">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>