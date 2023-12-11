<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Error Handler</title>
</head>
<body>
    <?php
        error_reporting(E_ERROR); // E_ERROR is used to hide warnings and notices
        function customError($errno, $errstr) {
            echo "<b>Error:</b> [$errno] $errstr<br>"; // $errno is the error number and $errstr is the error message
            echo "Ending Script";
            die();
        }
        set_error_handler("customError");
        $file = fopen("test.txt", "r");
        echo "File opened successfully";
    ?>
</body>
</html>