<?php
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);


	$item = $_POST['item'];
	if (!file_exists('lista.txt')) {
		touch('lista.txt');
	}
	$arquivo = fopen('lista.txt', 'a');
	fwrite($arquivo, $item . PHP_EOL);
	fclose($arquivo);

	echo 'Item salvo com sucesso!';

	echo '<br>';
	echo '<br>';

	echo '<a href="index.html"><button>Voltar</button></a>';
?>