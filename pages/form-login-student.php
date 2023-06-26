<?php include '../includes/login.php'; include '../version.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Login</title>
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
            <form action="form-login-student.php" method="post">
                <h1>Login</h1>
                <label for="">Email: </label>
                <input type="text" class="form-control" name="email" id="email">
                <label for="">Senha:</label>
                <input type="password" class="form-control" name="password" id="password">
                <div class="buttons">
                    <input type="submit" name="submit" class="btn btn-success" value="Entrar">
                    <a href="./form-register-student.php" class="btn btn-primary">Cadastre-se</a>
                    <a href="../index.php" class="btn btn-danger">Voltar</a>
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