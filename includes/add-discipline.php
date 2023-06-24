<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";
    
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
        if($rowNome !== $discipline)
        {
            $sql = "INSERT INTO disciplina(nome) VALUES('$discipline')";
            $res = $conn->query($sql);
            
            $msg = "Disciplina cadastrada com sucesso!";
            $typeMsg = "success";
            $visibility = "visible";
            
        } else {    

            $msg = "Disciplina já cadastrada!";
            $typeMsg = "danger";
            $visibility = "visible";
            
        }
        

    }
?>