<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mysqli API</title>
</head>
<body>
    <?php 
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "testdb";
        $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);
        if (!$conn) {
            die("Connection failed: " . mysqli_connect_error());
        }
        echo "Connected successfully <br>";
        $sql = "CREATE Database $dbname";
        if (mysqli_query($conn, $sql)) {
            echo "Database created successfully <br>";
        } else {
            echo "Error creating database: " . mysqli_error($conn) . "<br>";
        }
        $sql = "CREATE TABLE Users (
            id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
            firstname VARCHAR(30) NOT NULL,
            lastname VARCHAR(30) NOT NULL,
            email VARCHAR(50),
            reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
        )";
        if (mysqli_query($conn, $sql)) {
            echo "Table Users created successfully <br>";
        } else {
            echo "Error creating table: " . mysqli_error($conn) . "<br>";
        }
        $sql = "INSERT INTO Users (firstname, lastname, email)
        VALUES ('John', 'Doe', 'johndoe@gmail.com')";

        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully <br>";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
        }
        mysqli_close($conn);
?>
</body>
</html>