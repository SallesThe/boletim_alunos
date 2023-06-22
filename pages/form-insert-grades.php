<?php include '../includes/insert-grades.php'; include '../includes/validate-login.php';?>
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
            <h2>INSERIR NOTAS</h2>
            <form action="form-insert-grades.php" method="post">
                <label for="student">Aluno:</label>
                <select class="form-select select" name="student" id="student">
                    <option selected>Selecione um aluno</option>
                    <option value="2">Davi Sales</option>
                    <option value="3">Mateus Santos</option>
                    <option value="4">Maria Eduarda</option>
                </select>
                <label for="grade-1">AV1:</label>
                <input class="form-control" type="text" name="grade-1" id="grade-1">
                <label for="grade-2">AV2:</label>
                <input class="form-control" type="text" name="grade-2" id="grade-2">
                <label for="grade-2">Recuperação:</label>
                <input class="form-control" type="text" name="grade-2" id="grade-2">
                <input type="submit" class="btn btn-success" value="Inserir">
            </form>
        </main>
        <footer>
            <p class="version">version 0.0.2</p>
        </footer>
    </body>
</html>