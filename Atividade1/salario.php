<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Salário com Comissão</title>
</head>
<body>
    <h1>Calcular salario com comissao</h1>
    <form action="" method="POST">
        Salário Fixo: <input type="number" step="0.01" name="salario_fixo" required><br>
        Vendas Totais: <input type="number" step="0.01" name="vendas" required><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $salario_fixo = $_POST['salario_fixo'];
            $vendas = $_POST['vendas'];

            $comissao = $vendas * 0.04;
            $salario_final = $salario_fixo + $comissao;

            echo "<p>A comissão e: R$ " . number_format($comissao, 2) . "</p>";
            echo "<p>O salerio final e: R$ " . number_format($salario_final, 2) . "</p>";
        }
    ?>
</body>
</html>
