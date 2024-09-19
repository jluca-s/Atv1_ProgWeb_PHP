<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Área do Trapézio</title>
</head>
<body>
    <h1>Calcular area do trapezio</h1>
    <form action="" method="POST">
        Base Maior: <input type="number" name="base_maior" required><br>
        Base Menor: <input type="number" name="base_menor" required><br>
        Altura: <input type="number" name="altura" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $base_maior = $_POST['base_maior'];
            $base_menor = $_POST['base_menor'];
            $altura = $_POST['altura'];

            $area = (($base_maior + $base_menor) * $altura) / 2;
            echo "<p>A area do trapezio e: " . $area . "</p>";
        }
    ?>
</body>
</html>
