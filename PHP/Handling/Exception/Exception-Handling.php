<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exception Handling</title>
</head>
<body>
    <?php 
        print "Enter a number: ";
        fscanf(STDIN, "%d", $num);
        try {
            if($num < 0) {
                throw new Exception("Number must be positive"); // throw keyword is used to throw an exception
            } else {
                echo "You have entered: $num";
            }
        } catch(Exception $e) { // catch keyword is used to catch an exception
            echo "Error: " . $e->getMessage(); // getMessage() method is used to get the error message
        }
    ?>
</body>
</html>