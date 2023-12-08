<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web Concepts</title>
</head>
<body>
    <p>Client side and Server Side Scripts</p>
</body>
<script type="text/javascript">
    // Client Side Script
    document.write(`Client side Date: ${Date()}<br>`);
    document.write(`Client side Time: ${Date().split(" ")[4]}<br>`);
</script>
<?php 
    // Server Side Script
    date_default_timezone_set("Asia/Singapore");
    echo "Server side Date: ".date("d/m/Y")."<br>";
    echo "Server side Time: ".date("h:i:sa")."<br>";
?>
</html>