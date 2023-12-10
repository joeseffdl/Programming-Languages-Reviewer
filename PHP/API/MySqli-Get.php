<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MySqli API</title>
</head>
<body>
    <?php 
        $con = mysqli_connect("localhost","root","","testdb");
        if (mysqli_connect_errno()) {
            echo "Failed to connect to MySQL: " . mysqli_connect_error();
            exit();
        } else {
            echo "Connected successfully <br>";
        }
        $sql = "SELECT * FROM Users";
        $result = mysqli_query($con, $sql);
        $row_count = mysqli_num_rows($result);
        for ($i = 0; $i < $row_count; $i++) {
            $row = mysqli_fetch_row($result);
            echo $row['firstname'] . " " . $row['lastname'] . " " . $row['email'] . "<br>";
        }
        mysqli_free_result($result);
        mysqli_close($con);
    ?>
</body>
</html>