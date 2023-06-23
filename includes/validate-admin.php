<?php 
    include 'connection.php';
    session_start();

    $visibility = "hidden";
    $msg = $typeMsg = "";

    // Validando se o formulário foi enviado
    if(isset($_POST['submit']))
    {
        $admin = $_POST['name'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM admin WHERE nome = '$admin' AND senha = '$password'; ";
        $res = $conn->query($sql);
        $row = $res->fetch_assoc();

        // Consertando erro array nulo
        $rowNome = isset($row['nome']) ? $row['nome'] : null;
        $rowSenha = isset($row['senha']) ? $row['senha'] : null;

        if($rowNome === $admin && $rowSenha === $password)
        {
            $_SESSION['nome'] = $admin;
            header('Location: ../pages/admin.php');
        } else {
            $msg = "Usuário ou Senha inválidos!";
            $typeMsg = "danger";
            $visibility = "visible";
        }
    }
?>