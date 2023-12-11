<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - SET</title>
</head>
<body>
    <?php 
        if(isset($_POST["submit"])){
            session_start();
            $_SESSION["name"] = $_POST["name"];
            $_SESSION["email"] = $_POST["email"];
            echo "Session variables are set <br>";
            echo "<a href='checksession.php'>Click here to view session variables</a>";
            exit();
        }
    ?>

    <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="POST">
        Name: <input type="text" name="name"><br>
        Email: <input type="text" name="email"><br>
        <input type="submit" name="submit" value="Submit">
    </form>
</body>
</html>