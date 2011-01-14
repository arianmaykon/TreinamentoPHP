<?php
$nome = trim($_POST['nome']);
$data_nascimento = trim($_POST['data_nascimento']);
$observacao = trim($_POST['observacao']);



$con = mysql_connect('localhost', 'root', 'root');
mysql_select_db('treinamentophp');

$sql = "insert into pessoa (nome, data_nascimento, observacao) values ('"
    . $nome . "', '" . $data_nascimento . "', '" . $observacao . "')";

$resultado = mysql_query($sql);

mysql_close($con);

if ($resultado) {
    $msg = 'Cadastro efetuado com sucesso!';
    header('Location: index.php?msg=' . $msg);
} else {
    $msg = 'Falha ao cadastrar pessoa!';
    header('Location: cadastrar.php?msg=' . $msg . '&nome=' . $nome . '&data_nascimento=' . $data_nascimento);
}
?>