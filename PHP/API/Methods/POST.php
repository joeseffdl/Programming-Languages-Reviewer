<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST Method</title>
</head>
<body>
    <?php 
        if(isset($_POST["submit"])){
            echo "Welcome " . $_POST["name"] . "<br>";
            echo "Your email address is: " . $_POST["email"];

            exit();
        }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="POST">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="submit">
    </form>
</body>
</html>