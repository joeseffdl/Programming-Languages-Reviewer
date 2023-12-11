<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Scalar Type Declarations</title>
</head>
<body>
    <?php 
        declare(strict_types=1); // strict_types means that the types of the parameters must match the declared types exactly
        function average(int $x, int $y): float { // int (input type) and float (output type) are scalar types
            $avg = ($x + $y) / 2;
            return $avg;
        }
        
        echo average(2, 3);
    ?>
</body>
</html>