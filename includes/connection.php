<?php 
    $username = "root";
    $hostname = "localhost";
    $password = "";
    $database = "mydb";

    try {
        $conn = new mysqli($hostname, $username, $password, $database);
        // echo "Connection Success!";
        
    } catch (Exception $e) {
        $msg = $e->getMessage();
        echo "Connection Failed ! Error: $msg";
    }


   
?>