<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";

    // Validando se o formulário foi enviado
    if(isset($_POST['submit']))
    {
        $email = $_POST['email'];
        $password = $_POST['password'];
        if(isset($_POST['email']))
        {
            
        }
        $sql = "SELECT * FROM aluno WHERE email = '$email' AND senha = '$password';";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        // Consertando erro de array nulo
        $rowNome = isset($row['nome']) ? $row['nome'] : null; 
        $rowSenha = isset($row['senha']) ? $row['senha'] : null; 
        $rowEmail = isset($row['email']) ? $row['email'] : null; 

        // Validando se o email e a senha estão validas
        if($rowEmail === $email && $rowSenha === $password)
        {
            $_SESSION['nome'] = $row['nome']; 
            header('Location: ../pages/home.php');
        } else {
            $msg = "Email ou senha inválidos!";
            $typeMsg = "danger";
            $visibility = "visible";
        }
    }
?>