<?php ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Login</title>
        <!-- CSS -->
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <form action="index.php" method="post">
                <h1>Login</h1>
                <label for="">Email: </label>
                <input type="text" class="form-control" name="email" id="email">
                <label for="">Senha:</label>
                <input type="password" class="form-control" name="password" id="password">
                <div class="buttons">
                    <input type="submit" class="btn btn-success" value="Enviar">
                    <a href="./pages/form_register.php" class="btn btn-primary">Cadastre-se</a>
                </div>
            </form>
        </main>
    </body>
</html>