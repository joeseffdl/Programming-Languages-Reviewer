<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nullish Coalescing</title>
</head>
<body>
    <?php 
        // Nullish Coalescing is a new operator introduced in PHP 7.4
        // It is used to check if the value is null or not
        // If the value is null, it returns the right operand
        // If the value is not null, it returns the left operand
        $x = null;
        $y = 10;
        $z = $x ?? $y;
        echo $z . "<br>";

        $x = 5;
        $y = 10;
        $z = $x ?? $y;
        echo $z . "<br>";

        $x = null;
        $y = null;
        $z = $x ?? $y;
        echo $z . "<br>";

        $x = 5;
        $y = null;
        $z = $x ?? $y;
        echo $z . "<br>";
    ?>
    
</body>
</html>