<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>If - Else If - Else Statements</title>
</head>
<body>
    <?php 
        $x = rand(1, 100);

        if( $x < 50 ) {
            echo "The number is less than 50";
        } else if( $x > 50 ) {
            echo "The number is greater than 50";
        } else {
            echo "The number is 50";
        }
    ?>
</body>
</html>