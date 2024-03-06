<?php
// Recupera os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$matricula = $_POST['matricula'];
$curso = $_POST['curso'];

// Lê o arquivo e armazena em um array
$arquivo = file('../registro_aluno.txt');

// Procura pelo aluno pelo ID e atualiza
foreach ($arquivo as $key => $linha) {
    $linha_dados = explode('#', $linha);
    if ($linha_dados[0] == $id) {
        $arquivo[$key] = $id . '#' . $nome . '#' . $matricula . '#' . $curso . "\n";
    }
}

// Salva o arquivo novamente com o aluno atualizado
file_put_contents('../registro_aluno.txt', $arquivo);

// Redireciona para a página de consulta
header('Location: consultar_chamado.php');
?>