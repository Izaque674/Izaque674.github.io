<?php
// registra_chamado.php
session_start();
require_once "C:/xampp/htdocs/chamadoReal/src/models/Aluno.php";

// O restante do código permanece o mesmo, mas você pode querer otimizar o código CSS e HTML.

	//estamos trabalhando na montagem do texto
	$nome = str_replace('<br>', '-', $_POST['nome']);
	$matricula = str_replace('<br>', '-', $_POST['matricula']);
	$curso = str_replace('<br>', '-', $_POST['curso']);

	//implode('#', $_POST);

	$texto = $_SESSION['id'] . '#' . $nome . '#' . $matricula . '#' . $curso . PHP_EOL;


	//abrindo o arquivo
	$arquivo = fopen('../registro_aluno.txt', 'a');
	//escrevendo o texto
	fwrite($arquivo, $texto);
	//fechando o arquivo
	fclose($arquivo);

	//echo $texto;
	header('Location: aluno.php');
?>