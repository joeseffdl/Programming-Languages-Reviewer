<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sessions - GET</title>
</head>
<body>
    <?php 
        session_start();
        echo "Name: " . $_SESSION["name"] . "<br>";
        echo "Email: " . $_SESSION["email"] . "<br>";
        session_unset(); // Unset all session variables
        session_destroy(); // Destroy all session variables
    ?>
</body>
</html>