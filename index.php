<?php include 'version.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Login</title>
        <link rel="shortcut icon" href="favicon-16x16.png" type="image/x-icon">
        <!-- CSS -->
        <link rel="stylesheet" href="style.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <main>
            <a href="./pages/form-login-professor.php" class="btn btn-success" style="width: 160px; height: 40px; margin-bottom: 25px; text-align: center;">Sou Professor</a>
            <a href="./pages/form-login-student.php" class="btn btn-success" style="width: 160px; height: 40px; margin-bottom: 25px;">Sou Aluno</a>
            <a href="./pages/form-admin.php" class="btn btn-secondary" style="width: 160px; height: 40px;">Administrador</a>
        </main>
        <footer>
            <p class="version"> <?php echo $version ?> </p>
        </footer>
    </body>
</html>