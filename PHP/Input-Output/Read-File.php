<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read File</title>
</head>
<body>
    <?php
        $filename = "newfile.txt";
        $file = fopen($filename, "r");

        if(!$file){
            echo "Error in opening file";
            exit();
        }
        while (!feof($file)) { // feof() checks if the end of file has been reached
            $c = fgetc($file); // fgetc() reads a single character from a file
            echo $c;
        }
        fclose($file);
    ?>
</body>
</html>