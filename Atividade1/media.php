<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Média do Aluno</title>
</head>
<body>
    <h1>Calcular a media de um aluno</h1>
    <form action="" method="POST">
        Nome do Aluno: <input type="text" name="nome" required><br>
        Nota 1: <input type="number" step="0.01" name="nota1" required><br>
        Nota 2: <input type="number" step="0.01" name="nota2" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nome = $_POST['nome'];
            $nota1 = $_POST['nota1'];
            $nota2 = $_POST['nota2'];

            $media = ($nota1 + $nota2) / 2;
            echo "<p>O aluno " . htmlspecialchars($nome) . " ficou com " . number_format($media, 1) . " de média.</p>";
        }
    ?>
</body>
</html>
