<?php 
    include 'connection.php';

    $visibility = "hidden";
    $msg = $typeMsg = "";
    if(isset($_POST['submit']))
    {
        if($_POST['password'] === $_POST['confirm-password'])
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];


            $sql = "SELECT nome, email FROM aluno WHERE nome = '$name' AND email = '$email'";
            $res = $conn->query($sql);
            $row = $res->fetch_assoc();
            
            if($row['nome'] === $name)
            {
                $msg = "Usuário já cadastrado";
                $typeMsg = "danger";
                $visibility = "visible";
            } else {
                $msg = "Aluno cadastrado com sucesso!";
                $typeMsg = "success";
                $visibility = "visible";
            }
            
            $sql = "INSERT INTO aluno(nome, email, senha) VALUES('$name', '$email', '$password')";
    
            $conn->query($sql);                

        } else {
            echo "<script>window.alert('As senhas não são iguais.')</script>";
        }
    }

?>