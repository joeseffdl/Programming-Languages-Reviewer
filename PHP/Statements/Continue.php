<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Continue Statement</title>
</head>
<body>
    <?php
        $x = 0;
    
        while( $x < 10 ) {
            $x++;
            if( $x == 4 ) {
                continue;
            }
            echo "The number is: $x <br>";
        }
    ?>
</body>
</html>