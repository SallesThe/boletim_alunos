<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";

    if(isset($_POST['submit']))
    {
        $sql = "DELETE ";
    }
?>