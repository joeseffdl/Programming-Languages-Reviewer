<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Call by Reference Function</title>
</head>
<body>
    <?php 
    $x = 12;
    $y = 42;

    function swapValues(&$x, &$y){
        $temp = $x;
        $x = $y;
        $y = $temp;
    }
    echo "Initial Values: x = $x, y = $y<br>";
    swapValues($x, $y); // Call swapValues() function
    echo "Swapped Values: x = $x, y = $y<br>";
    ?>



</body>
</html>