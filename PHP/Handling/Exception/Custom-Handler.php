<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Custom Exception Handler</title>
</head>
<body>
    <?php
        function customException($exception) {
            echo "<b>Uncaught exception:</b> " . $exception->getMessage() . "<br>";
        }
        set_exception_handler("customException");

        print "Enter the numerator: ";
        fscanf(STDIN, "%d", $numerator);
        echo "Enter the denominator: ";
        fscanf(STDIN, "%d", $denominator);

        
        if ($num == 0)
        throw new Exception("Division by zero");
        $result = $numerator / $denominator;
        echo "Result: $result";
    ?>
</body>
</html>