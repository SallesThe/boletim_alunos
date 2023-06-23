<?php 
    include 'connection.php';
    session_start();

    $visibility = "visible";
    $msg = $typeMsg = "success";
    $msg = "teste acionado com sucesso ";
    
    // Validando se o formulário foi enviado
    if(isset($_POST['submit']))
    {
        $discipline = $_POST['name'];

        $sql = "SELECT nome FROM disciplina WHERE nome = '$discipline'; ";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        // Consertando erro array nulo
        $rowNome = isset($row['nome']) ? $row['nome'] : null;

        // Validando se a disciplina já foi cadastrada
        if($rowNome === $discipline)
        {
            $sql = "INSERT INTO disciplina(nome) VALUES('$discipline')";
            $res = $conn->query($sql);
            
            $msg = "Disciplina cadastrada!";
            $typeMsg = "success";
            $visibility = "visible";
            
        } else {

            $msg = "Disciplina já cadastrada!";
            $typeMsg = "danger";
            $visibility = "visible";
            
        }
        

    }
?>