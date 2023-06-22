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

        $sql = "SELECT * FROM professor WHERE email = '$email' AND senha = '$password';";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        // Consertando erro do array nulo
        $rowEmail = isset($row['email']) ? $row['email'] : null;
        $rowSenha = isset($row['senha']) ? $row['senha'] : null;

        // Validando se o email e a senha estão validos
        if($rowEmail === $email && $rowSenha === $password)
        {
            $_SESSION['nome'] = $row['nome']; 
            header('Location: ../pages/home-professor.php');
        } else {
            $msg = "Email ou senha inválidos!";
            $typeMsg = "danger";
            $visibility = "visible";
        }
    }
?>