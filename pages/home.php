<?php include '../includes/home_validate.php'; include '../includes/validate-login.php'; include '../version.php';?>
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
            <h2 style="margin: 25px 0px;"><?php echo $student; ?> </h2>
            <table class="table table-striped">
                <tr>
                    <th>Matéria</th>
                    <th>Prova A1</th>
                    <th>Prova A2</th>
                    <th>Média Parcial</th>
                    <th>Recuperação</th>
                    <th>Nota Final</th>
                    <th>Situação</th>
                </tr>
                <tr>
                    <td>Programação Orientado a Objetos</td>
                    <td>7.0</td>
                    <td>7.0</td>
                    <td>7.0</td>
                    <td></td>
                    <td>7.0</td>
                    <td>Aprovado</td>
                </tr>
            </table>
        </main>
        <footer>
            <p class="version"> <?php echo $version ?> </p>
        </footer>
    </body>
</html>