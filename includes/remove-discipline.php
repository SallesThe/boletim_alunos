<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";

    $sql = "SELECT * FROM disciplina;";
    $res = $conn->query($sql);

    if(isset($_POST['submit']))
    {
        $discipline = $_POST['discipline'];
        $sql = "DELETE FROM disciplina WHERE nome = '$discipline'; ";
        $conn->query($sql);

        $msg = "Disciplina deletada com sucesso !";
        $typeMsg = "success";
        $visibility = "visible";

        $sql = "SELECT * FROM disciplina;";
        $res = $conn->query($sql);
    }
?>