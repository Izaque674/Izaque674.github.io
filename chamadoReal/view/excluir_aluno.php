<?php
// Recupera o número da matrícula do aluno a ser excluído
$matricula = $_GET['matricula'];

// Lê o arquivo e armazena em um array
$arquivo = file('../registro_aluno.txt');

// Procura pelo aluno pela matrícula e remove
$linhas = array();
foreach ($arquivo as $linha) {
    $linha_dados = explode('#', $linha);
    if ($linha_dados[0] != $matricula) { // Se o número da matrícula não corresponder, mantém a linha
        $linhas[] = $linha;
    }
}

// Salva o arquivo novamente sem o aluno excluído
file_put_contents('../registro_aluno.txt', $linhas);

// Redireciona para a página de consulta
header('Location: consultar_chamado.php');
?>