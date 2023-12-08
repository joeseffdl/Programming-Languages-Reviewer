<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
    <?php 
        $x = 12;
        $y = 42;

        if ($x == $y){
            echo "x is Equal to y <br>";
        } else {
            echo "x Not Equal to y<br>";
        }

        if ($x > $y){
            echo "x is Greater than y <br>";
        } else {
            echo "x is Not Greater than y<br>";
        }

        if ($x < $y){
            echo "x is Less than y <br>";
        } else {
            echo "x is Not Less than y<br>";
        }

        if ($x >= $y){
            echo "x is Greater than or Equal to y <br>";
        } else {
            echo "x is Not Greater than or Equal to y<br>";
        }

        if ($x <= $y){
            echo "x is Less than or Equal to y <br>";
        } else {
            echo "x is Not Less than or Equal to y<br>";
        }

        if ($x != $y){
            echo "x is Not Equal to y <br>";
        } else {
            echo "x is Equal to y<br>";
        }
    ?>
</body>
</html>