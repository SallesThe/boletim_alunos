<?php 
    // Incluindo arquivo de conexão com o banco
    include 'connection.php';

    $visibility = "hidden";
    $msg = $typeMsg = "";

    // Preenchendo opções da tag SELECT
    $sql_select = "SELECT nome FROM disciplina";
    $res = $conn->query($sql_select);
            
    // Validando se o formulário foi enviado
    if(isset($_POST['submit']))
    {

        
        // Validando se a senha confere com a confirmação
        if($_POST['password'] === $_POST['confirm-password'])
        {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];
            $class = $_POST['class'];
            $discipline = $_POST['discipline'];



            $sql = "SELECT nome, email FROM professor WHERE nome = '$name' AND email = '$email'";
            $res = $conn->query($sql);
            $row = $res->fetch_assoc();

            // Consertando erro do array nulo 
            $rowNome = isset($row['nome']) ? $row['nome'] : null;
            $rowEmail = isset($row['email']) ? $row['email'] : null;
            
            // Validando se o professor já está cadastrado no banco
            if($rowNome === $name && $rowEmail === $email)
            {
                $msg = "Usuário já cadastrado";
                $typeMsg = "danger";
                $visibility = "visible";

                $sql_select = "SELECT nome FROM disciplina";
                $res = $conn->query($sql_select);
            } else {
                $msg = "Usuário cadastrado com sucesso!";
                $typeMsg = "success";
                $visibility = "visible";
          
                $sql = "INSERT INTO professor(nome, email, senha, disciplina, turma) VALUES('$name', '$email', '$password', '$discipline', '$class')";
                $res = $conn->query($sql);
                $row = $res->fetch_assoc();
                
                $discipline = isset($row['disciplina']) ? $row['disciplina'] : null;
                $_SESSION['discipline'] = $discipline;

                $sql_select = "SELECT nome FROM disciplina";
                $res = $conn->query($sql_select);
            }
        } else {
            $msg = "Senhas divergentes!";
            $typeMsg = "danger";
            $visibility = "visibily";
        }
    }
?>