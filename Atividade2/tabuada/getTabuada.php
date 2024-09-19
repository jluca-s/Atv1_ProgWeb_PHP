<?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    if (file_exists('tabuada.txt')) {
        $arquivo = fopen('tabuada.txt', 'r');
        while (!feof($arquivo)) {
            echo fgets($arquivo) . '<br>';
        }
        fclose($arquivo);

        echo '<br>';
        echo '<a href="index.html"><button>Voltar</button></a>';
    } else {
        echo 'Nenhuma tabuada salva!';
        echo '<br>';
        echo '<br>';
        echo '<a href="index.html"><button>Voltar</button></a>';
    }
?>
