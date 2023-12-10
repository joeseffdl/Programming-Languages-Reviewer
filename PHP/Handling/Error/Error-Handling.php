<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error Handling using die() function</title>
</head>
<body>
    <?php 
        if(!file_exists("test_die_function.txt")) {
            die("File not found"); // die() function prints a message and exits the current script
        } else {
            $file = fopen("test_die_function.txt", "r");
            print "Opend file successfully";
        }
        
    ?>
</body>
</html>