<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSPRNG</title>
</head>
<body>
    <?php 
        //CSPRNG stands for Cryptographically Secure Pseudo-Random Number Generator
        $bytes = random_bytes(5);
        echo $bytes . "<br>";
        print(bin2hex($bytes). "<br>");
        $int = random_int(0, 100);
        echo "random integer = $int";
    ?>
</body>
</html>