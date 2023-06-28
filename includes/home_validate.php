<?php 
    include 'connection.php';
    session_start();

    $student = $_SESSION['nome'];

    $sql = "SELECT * FROM aluno WHERE nome = '$student'; ";
    $res = $conn->query($sql);
    $row = $res->fetch_assoc();
    
    $studentID = isset($row['id']) ? $row['id'] : null;
    
    $sql = "SELECT * FROM boletim WHERE id_boletim = '$studentID'; ";
    $res = $conn->query($sql);


    
?>