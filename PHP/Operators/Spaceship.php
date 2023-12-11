<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Spaceship Operator</title>
</head>
<body>
    <?php 
        // Spaceship operator is used to compare two expressions
        // It returns -1, 0 or 1 when first expression is respectively less than, equal to or greater than the second expression
        echo 1 <=> 1; // 0
        echo "<br>";
        echo 1 <=> 2; // -1
        echo "<br>";
        echo 2 <=> 1; // 1
        echo "<br>";
    ?>
</body>
</html>