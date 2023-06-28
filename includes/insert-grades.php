<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";
    $discipline = $_SESSION['discipline'];

    // Buscando dados para preencher a tag select
    $sql_select = "SELECT nome FROM aluno";
    $res = $conn->query($sql_select);

    if(isset($_POST['submit']))
    {

        // Declarando variáveis
        $AV1 = $_POST['grade-1'];
        $AV2 = $_POST['grade-2'];
        $AV1 = floatval($AV1);
        $AV2 = floatval($AV2);
        $recuperation = $_POST['recuperation'];
        $student = $_POST['student'];
        $professor = $_SESSION['nome'];
        

        // Validando operações
        if($recuperation === "")
        {
            $mediaParcial = ($AV1 + $AV2) / 2;
            $notaFinal = $mediaParcial;
            $situacao = $notaFinal >= 7 ? "Aprovado" : "Reprovado";
        } else {
            $mediaParcial = (is_numeric($AV1) + is_numeric($AV2)) / 2;
            $recuperation = 0;
            $notaFinal = $mediaParcial;
            $situacao = is_numeric($notaFinal) < 7 ? "Aprovado" : "Reprovado";
        }


        $sql = "SELECT id FROM professor WHERE nome = '$professor'; ";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        $studentID = isset($row['id']) ? $row['id'] : null;

        $sql = "SELECT id_boletim FROM boletim WHERE id_boletim = '$studentID'";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        $boletimID = isset($row['id_boletim']) ? $row['id_boletim'] : null;

        if($boletimID !== $studentID)
        {
            $sql = "INSERT INTO boletim(id_boletim, materia, provaA1, provaA2, recuperacao, notaFinal, mediaParcial, situacao) VALUES('$studentID', '$discipline', '$AV1', '$AV2', '$recuperation', '$mediaParcial', '$notaFinal', '$situacao');";
            $conn->query($sql);

            $msg = "Nota adicionada!";
            $typeMsg = "success";
            $visibility = "visible";

            // Buscando dados para preencher a tag select
            $sql_select = "SELECT nome FROM aluno";
            $res = $conn->query($sql_select);
        } else {
            $msg = "Ja cadastrado";
            $typeMsg = "danger";
            $visibility = "visible";

            // Buscando dados para preencher a tag select
            $sql_select = "SELECT nome FROM aluno";
            $res = $conn->query($sql_select);
        }
        
    }
?>