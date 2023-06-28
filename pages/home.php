<?php include '../includes/home_validate.php'; include '../includes/validate-login.php'; include '../version.php';?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boletim Eletronico - Home</title>
        <link rel="shortcut icon" href="../favicon-16x16.png" type="image/x-icon">
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
                <?php 
                    while($row = $res->fetch_assoc())
                    {
                        echo "<tr>";
                        echo "<td>" . $row['materia'] . "</td>";
                        echo "<td>" . $row['provaA1'] . "</td>";
                        echo "<td>" . $row['provaA2'] . "</td>";
                        echo "<td>" . $row['mediaParcial'] . "</td>";
                        echo "<td>" . $row['recuperacao'] . "</td>";
                        echo "<td>" . $row['notaFinal'] . "</td>";
                        echo "<td>" . $row['situacao'] . "</td>";
                        echo "</tr>";
                    }
                ?>
            </table>
        </main>
        <footer>
            <p class="version"> <?php echo $version ?> </p>
        </footer>
    </body>
</html>