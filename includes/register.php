<?php 
    // Incluindo arquivo de conexão com o banco
    include 'connection.php';

    $visibility = "hidden";
    $msg = $typeMsg = "";

    // Validando se o formulário foi enviado
    if(isset($_POST['submit']))
    {
        // Validando se a senha confere com a confirmação
        if($_POST['password'] === $_POST['confirm-password'])
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $sql = "SELECT nome, email FROM aluno WHERE nome = '$name' AND email = '$email'";
            $res = $conn->query($sql);
            $row = $res->fetch_assoc();

            $rowNome = isset($row['nome']) ? $row['nome'] : null;
            $rowEmail = isset($row['nome']) ? $row['email'] : null;
            
            // Validando se o aluno já está cadastrado no banco
            if($rowNome === $name && $rowEmail === $email)
            {
                $msg = "Aluno já cadastrado";
                $typeMsg = "danger";
                $visibility = "visible";
            } else {
                $msg = "Aluno cadastrado com sucesso!";
                $typeMsg = "success";
                $visibility = "visible";
          
                $sql = "INSERT INTO aluno(nome, email, senha) VALUES('$name', '$email', '$password')";
        
                $conn->query($sql);                
            }
        } else {
            $msg = "Senhas divergentes";
            $typeMsg = "danger";
            $visibility = "visibily";
        }
    }
?>