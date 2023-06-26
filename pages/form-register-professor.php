<?php include '../includes/register-professor.php'; include '../version.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Cadastro</title>
        <link rel="shortcut icon" href="../favicon-16x16.png" type="image/x-icon">
        <!-- CSS -->
        <link rel="stylesheet" href="../style.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <p 
            id="message" class="alert alert-<?php echo "$typeMsg";?>" style='visibility: <?php echo "$visibility"?> ;'> <?php echo "$msg"; ?>
            <button class="close-button" onclick="closeButton()">X</button> 
        </p>
        <main>
            <form action="./form-register-professor.php" method="post">
                <h1>Cadastro</h1>
                <label for="name">Nome: </label>
                <input type="text" class="form-control" name="name" id="name" required>
                <label for="email">Email: </label>
                <input type="email" class="form-control" name="email" id="email" required>
                <label for="matter">Disciplina:</label>
                <select class="form-select select" name="discipline" id="discipline" required>
                    <option value="" selected>Selecione sua Disciplina</option>
                    <?php 
                         while($row = $res->fetch_assoc())
                         {
                             echo "<option value='" . $row['nome'] . "'>" . $row['nome'] . "</option>"; 
                         }
                    ?>
                </select>
                <label for="class">Turma:</label>
                <input type="text" class="form-control" name="class" id="class" required>
                <label for="password">Senha:</label>
                <input type="password" class="form-control" name="password" id="password" required>
                <label for="confirm-passoword">Corfime sua senha:</label>
                <input type="password" class="form-control" name="confirm-password" id="confirm-password" required>
                <div class="buttons">
                    <input type="submit" class="btn btn-success" name="submit" value="Cadastrar">
                    <a href="../pages/form-login-professor.php" class="btn btn-primary">Voltar</a>
                </div>
            </form>
        </main>
        <footer>
            <p class="version"> <?php echo $version ?> </p>
        </footer>
        <script> 
            const closeButton = () => {
                document.getElementById('message').style.display = "none";
            } 
        </script>
    </body>
</html>