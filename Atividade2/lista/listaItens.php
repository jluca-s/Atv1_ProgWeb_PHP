<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    // Lista todos os itens salvos

    $arquivo = fopen('lista.txt', 'r');
    $itens = [];
    while (!feof($arquivo)) {
        $linha = fgets($arquivo);
        if ($linha) {
            $itens[] = $linha;
        }
    }

    fclose($arquivo);

    echo '<ul>';
    foreach ($itens as $item) {
        echo "<li>$item</li>";
    }
    echo '</ul>';

    echo '<a href="index.html"><button>Voltar</button></a>';
?>