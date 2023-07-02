<?php 
    $host = "localhost";
    $dbname = "auth-sys";
    $user = "root";
    $pass = "";
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $pass);

    /*if ($conn) {
        echo("Database successfully connected");
    } else {
        echo("Connection failed");
    }*/
?>