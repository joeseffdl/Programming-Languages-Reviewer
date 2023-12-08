<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Variable Length Arguments</title>
</head>
<body>
    <?php 
        function average(){
            $sum = 0;
            $args = func_get_args(); // Get all arguments
            $count = func_num_args(); // Get number of arguments
            for($i = 0; $i < $count; $i++){
                $sum += $args[$i];
            }
        echo "The average of the $count inputs is: ";
        return $sum / $count;
        }
        echo average(1, 2, 3, 4, 5, 6, 7, 8, 9, 10) // Call average() function with 10 arguments
    ?>
</body>
</html>