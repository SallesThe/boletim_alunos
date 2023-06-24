<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";

    // Buscando dados para preencher a tag select
    $sql = "SELECT nome FROM aluno";
    $res = $conn->query($sql);

    if(isset($_POST['submit']))
    {
        $sql_student = "SELECT id, nome FROM aluno WHERE nome = '$student' ";
        $res = $conn->query($sql_student);
        $row = $res->fetch_assoc();

        // Consertando erro array nulo
        $rowNome = isset($row['nome']) ? $row['nome'] : null;
        $rowIDStudent = isset($row['id']) ? $row['id'] : null;

        $sql = "SELECT * FROM boletim WHERE id_boletim = '' ";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        // Consertando erro array nulo
        $rowNome = isset($row['nome']) ? $row['nome'] : null;
        $rowID = isset($row['id']) ? $row['id'] : null;
        
        if($rowID === $rowIDStudent)
        {

        }

        // Declarando variáveis
        $AV1 = $_POST['grade-1'];
        $AV2 = $_POST['grade-2'];
        $recuperation = $_POST['recuperation'];
        $student = $_POST['student'];
        $professor = $_SESSION['nome'];

        // Buscando aluno
        $sql_student = "SELECT id, nome FROM aluno WHERE nome = '$student' ";
        $res = $conn->query($sql_student);
        $row = $res->fetch_assoc();
        
        // Consertando erro array nulo
        $rowNome = isset($row['nome']) ? $row['nome'] : null;
        $rowID = isset($row['id']) ? $row['id'] : null;
        
        // Buscando nome professor
        $sql_professor = "SELECT disciplina FROM professor WHERE nome = '$professor' ";
        $res = $conn->query($sql_professor);
        $row = $res->fetch_assoc();
        
        // Consertando erro array nulo
        $rowDiscipline = isset($row['disciplina']) ? $row['disciplina'] : null;
        
        $sql = "INSERT INTO boletim(id_boletim, materia, provaA1, provaA2, recuperacao) VALUES('$rowID', '$rowDiscipline', '$AV1', '$AV2', '$recuperation')";
        $res = $conn->query($sql);

        // Consertando erro array nulo
        $rowNome = isset($row['nome']) ? $row['nome'] : null;
        $rowID = isset($row['id']) ? $row['id'] : null;
        
        $sql = "SELECT * FROM boletim";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        $sql = "SELECT nome FROM aluno";
        $res = $conn->query($sql);

        
    }
?>