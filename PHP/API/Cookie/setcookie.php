<?php
    if(isset($_POST['submit'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        setcookie("username", $username);
        setcookie("password", $password);
        
        echo "<b>Cookies Set Successfuly</b> <br>";
        echo "<a href='getcookie.php'><b>Click Here to See Cookies</b></a>";
    }
?>