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


            $sql = "SELECT nome, email FROM professor WHERE nome = '$name' AND email = '$email'";
            $res = $conn->query($sql);
            $row = $res->fetch_assoc();
            
            // Validando se o aluno já está cadastrado no banco
            if($row['nome'] === $name && $row['email'] === $email)
            {
                $msg = "Usuário já cadastrado";
                $typeMsg = "danger";
                $visibility = "visible";
            } else {
                $msg = "Usuário cadastrado com sucesso!";
                $typeMsg = "success";
                $visibility = "visible";
          
                $sql = "INSERT INTO professor(nome, email, senha) VALUES('$name', '$email', '$password')";
        
                $conn->query($sql);                
            }
        } else {
            $msg = "Senhas divergentes";
            $typeMsg = "danger";
            $visibility = "visibily";
        }
    }
?>