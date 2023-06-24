<?php include '../../includes/add-discipline.php'; include '../../includes/validate-login.php'; include '../../version.php'; ?>
<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin - Adicionar disciplina</title>
        <!-- CSS -->
        <link rel="stylesheet" href="../../style.css" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </head>
    <body>
        <div class="logout">
            <a href="form-delete-discipline.php" class="btn btn-dark" style="margin-right: 15px;">Deletar Disciplina</a>
            <a href="../../includes/logout.php" class="btn btn-danger">Sair</a>

        </div>
        <p 
            id="message" class="alert alert-<?php echo "$typeMsg";?>" style='visibility: <?php echo "$visibility"?> ;'> <?php echo "$msg"; ?>
            <button class="close-button" onclick="closeButton()">X</button> 
        </p>
        <main>
            <form action="form-add-discipline.php" method="post">
                <h1>Adicionar Disciplina</h1>
                <label for="name">Disciplina: </label>
                <input type="text" class="form-control" name="name" id="name" required>
                <div class="buttons" style="margin-top: 50px;">
                    <input type="submit" class="btn btn-success" name="submit" value="Adicionar">
                    <a href="../admin.php" class="btn btn-primary">Voltar</a>
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