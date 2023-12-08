<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators</title>
</head>
<body>
    <?php
        $x = 10;
        $y = 6;

        $z = $x + $y;
        echo "Addition: $z <br>";

        $z = $x - $y;
        echo "Subtraction: $z <br>";

        $z = $x * $y;
        echo "Multiplication: $z <br>";

        $z = $x / $y;
        echo "Division: $z <br>";

        $z = $x % $y;
        echo "Modulus: $z <br>";

        $z = $x ** $y;
        echo "Exponentiation: $z <br>";

        $z = $x++;
        echo "Post Increment: $z <br>";

        $z = $x--;
        echo "Post Decrement: $z <br>";

        $z = ++$x;
        echo "Pre Increment: $z <br>";

        $z = --$x;
        echo "Pre Decrement: $z <br>";
    ?>
</body>
</html>