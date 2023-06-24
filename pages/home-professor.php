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
        <div class="alert alert-success alert-dismissible fade show" id="msg" style="display: flex; position: fixed; bottom: 0; margin-bottom: 50px; text-align: center; align-items: center;" role="alert">
            Olá&nbsp;<strong> <?php echo $professor; ?></strong>, seja bem-vindo !
            <button class="close-button" onclick="closeButton()">X</button> 
        </div>
        <main>
            <h2>Menu</h2>
            <a href="./form-insert-grades.php" class="btn btn-primary buttons--home-professor">Inserir nota</a>
            <a href="" class="btn btn-primary buttons--home-professor">Anotações</a>
            <a href="" class="btn btn-warning buttons--home-professor">Avaliar aplicativo</a>
        </main>
        <footer>
            <p class="version"> <?php echo $version ?> </p>
        </footer>

        <script>
            const closeButton = () => {
                document.getElementById('msg').style.display = "none";
            }
        </script>
    </body>
</html>