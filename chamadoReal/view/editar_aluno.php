<?php
// Recupera o ID do aluno a ser editado
$id = $_GET['id'];

// Lê o arquivo e armazena em um array
$arquivo = file('../registro_aluno.txt');

// Procura pelo aluno pelo ID para preencher o formulário
$aluno_edit = '';
foreach ($arquivo as $key => $linha) {
    $linha_dados = explode('#', $linha);
    if ($linha_dados[0] == $id) {
        $aluno_edit = $linha;
        break;
    }
}

// Exibe o formulário de edição com os dados do aluno
if ($aluno_edit) {
    $aluno_dados = explode('#', $aluno_edit);
    echo '<form method="post" action="salvar_edicao_aluno.php">';
    echo '<input type="hidden" name="id" value="' . $aluno_dados[0] . '">';
    echo '<input type="text" name="nome" value="' . $aluno_dados[1] . '">';
    echo '<input type="text" name="curso" value="' . $aluno_dados[2] . '">';
    echo '<input type="submit" value="Salvar">';
    echo '</form>';
}
?>
