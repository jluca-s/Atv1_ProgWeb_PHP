<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $numero = $_POST['numero'];
    if (!file_exists('tabuada.txt')) {
        touch('tabuada.txt');
    }
    $arquivo = fopen('tabuada.txt', 'w');
    for ($i = 1; $i <= 10; $i++) {
        fwrite($arquivo, $numero . ' x ' . $i . ' = ' . $numero * $i . PHP_EOL);
        echo $numero . ' x ' . $i . ' = ' . $numero * $i . '<br>';
    }

    fclose($arquivo);

    echo '<br>';
    echo 'Tabuada salva com sucesso!';
    echo '<br>';
    echo '<a href="index.html"><button>Voltar</button></a>';
?>
