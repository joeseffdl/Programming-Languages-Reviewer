<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch Statement</title>
</head>
<body>
    <?php 
        $x = rand(1, 5);

        switch( $x ) {
            case 1:
            case 2:
            case 3:
            case 4:
            case 5:
                echo "The number is $x";
                break;
            default:
                echo "The number is not 1, 2, 3, 4, or 5";
        }
    ?>
</body>
</html>