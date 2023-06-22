<?php include '../includes/register.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Cadastro</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../style.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <p id="message" class="alert alert-<?php echo "$typeMsg";?>" style='visibility: <?php echo "$visibility"?> ;'> <?php echo "$msg"; ?> </p>
        <main>
            <form action="./form_register.php" method="post">
                <h1>Cadastro</h1>
                <label for="">Nome: </label>
                <input type="text" class="form-control" name="name" id="name" require>
                <label for="">Email: </label>
                <input type="text" class="form-control" name="email" id="email" require>
                <label for="">Senha:</label>
                <input type="password" class="form-control" name="password" id="password" require>
                <label for="">Corfime sua senha:</label>
                <input type="password" class="form-control" name="confirm-password" id="confirm-password" require>
                <div class="buttons">
                    <input type="submit" class="btn btn-success" name="submit" value="Enviar">
                    <a href="../index.php" class="btn btn-danger">Voltar</a>
                </div>
            </form>
        </main>
    </body>
</html>