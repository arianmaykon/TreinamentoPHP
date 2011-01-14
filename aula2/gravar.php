<?php
$nome = trim($_POST['nome']);
$data_nascimento = trim($_POST['data_nascimento']);
$observacao = trim($_POST['observacao']);



$con = mysql_connect('localhost', 'root', '');
mysql_select_db('treinamentophp');

$sql = "insert into pessoa (id, nome, data_nascimento, observacao) values (9, '"
    . $nome . "', '" . $data_nascimento . "', '" . $observacao . "')";

$resultado = mysql_query($sql);

// NAO FUNFOU
$linhasAfetadas = mysql_affected_rows($resultado);
//$linhasAfetadas = mysql_insert_id($resultado);

mysql_close($con);

if ($linhasAfetadas) {
    $msg = 'Cadastro efetuado com sucesso!';
    header('Location: index.php?msg=' . $msg);
} else {
    $msg = 'Falha ao cadastrar pessoa!';
    header('Location: cadastrar.php?msg=' . $msg . '&nome=' . $nome . '&data_nascimento=' . $data_nascimento);
}
?>