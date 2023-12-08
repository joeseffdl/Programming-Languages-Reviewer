<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User defined function default arguments</title>
</head>
<body>
    <?php
        function sayHello($name = "John Doe"){
            echo "Hello, $name<br>";
        }
        sayHello(); // Use default argument
        sayHello("Jane Doe"); // Overwrite default argument
    ?>
</body>
</html>