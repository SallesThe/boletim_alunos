<?php include '../includes/home-validate-professor.php'; include '../includes/validate-login.php'; include '../version.php';?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Home</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../style.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <a href="../includes/logout.php" class="btn btn-danger logout">Sair</a>
        <main>
            <h2>Menu</h2>
            <a href="./admin/form-add-discipline.php" class="btn btn-primary buttons--home-professor">Gerenciar Disciplinas</a>
            <a href="" class="btn btn-primary buttons--home-professor">Lista de alunos</a>
            <a href="" class="btn btn-primary buttons--home-professor">Lista de professores</a>
            <a href="" class="btn btn-warning buttons--home-professor">Avaliar aplicativo</a>
        </main>
        <footer>
            <p class="version"> <?php echo $version ?> </p>
        </footer>
    </body>
</html>