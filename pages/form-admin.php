<?php include '../includes/validate-admin.php'; include '../version.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Login</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../style.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <p id="message" class="alert alert-<?php echo "$typeMsg";?>" style='visibility: <?php echo "$visibility"?> ;'> <?php echo "$msg"; ?> </p>
        <main>
            <form action="form-admin.php" method="post">
                <h1>Admin</h1>
                <label for="">Usuario: </label>
                <input type="text" class="form-control" name="name" id="name">
                <label for="">Senha:</label>
                <input type="password" class="form-control" name="password" id="password">
                <div class="buttons">
                    <input type="submit" name="submit" class="btn btn-success" value="Entrar">
                    <a href="../index.php" class="btn btn-danger">Voltar</a>
                </div>
            </form>
        </main>
        <footer>
            <p class="version"> <?php echo $version ?> </p>
        </footer>
    </body>
</html>