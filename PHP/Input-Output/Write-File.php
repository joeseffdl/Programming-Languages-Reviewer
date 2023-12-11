<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Write File</title>
</head>
<body>
    <?php 
        $filename = "newfile.txt";
        $file = fopen($filename, "w");

        if($file == false){
            echo "Error in opening new file";
            exit();
        }

        $str = "This is a test file";        

        fwrite($file, $str); // Write to file 
        fclose($file);
        echo "File created successfully";
    ?>
</body>
</html>