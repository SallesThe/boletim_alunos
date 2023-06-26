<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";

    // Buscando dados para preencher a tag select
    $sql_select = "SELECT nome FROM aluno";
    $res = $conn->query($sql_select);

    if(isset($_POST['submit']))
    {

        // Declarando variáveis
        $AV1 = $_POST['grade-1'];
        $AV2 = $_POST['grade-2'];
        $recuperation = $_POST['recuperation'];
        $student = $_POST['student'];
        $professor = $_SESSION['nome'];

        $sql = "SELECT id FROM aluno WHERE nome = '$student'; ";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        $studentID = isset($row['id']) ? $row['id'] : null;

        $sql = "SELECT id_boletim FROM boletim";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        $boletimID = isset($row['id_boletim']) ? $row['id_boletim'] : null;

        if($boletimID !== $studentID)
        {
            $discipline = $_SESSION['discipline'];
            $sql = "INSERT INTO boletim(id_boletim, materia, provaA1, provaA2, recuperacao) VALUES('$boletimID', '$discipline', '$AV1', '$AV2', '$recuperation');";
            $conn->query($sql);
        } else {
            $msg = "Ja cadastrado";
            $typeMsg = "danger";
            $visibility = "visible";
        }
        
    }
?>