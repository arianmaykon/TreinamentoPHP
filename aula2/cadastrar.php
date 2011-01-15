<?php
$titulo = 'Cadastro';

$id = (int) isset($_GET['id'])?$_GET['id']:0;
$nome = '';
$data_nascimento = '';
$observacao = '';

if ($id) {
    $titulo = 'Edição';

    $con = mysql_connect('localhost', 'root', 'root');
    mysql_select_db('treinamentophp');

    $sql = 'SELECT * FROM pessoa WHERE id = ' . $id;

    $resultado = mysql_query($sql);

    if ($resultado) {
        $row = mysql_fetch_assoc($resultado);
        $nome = $row['nome'];
        $data_nascimento = $row['data_nascimento'];
        $observacao = $row['observacao'];
    } else {
        header('Location: index.php?msg=Pessoa não encontrada!');
    }

    mysql_close($con);
} else {
    if (isset($_GET['nome'])) {
        $nome = $_GET['nome'];
    }

    if (isset($_GET['data_nascimento'])) {
        $data_nascimento = $_GET['data_nascimento'];
    }
}
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Treinamento PHP - Aula 2</title>
    </head>
    <body>
        <h1><?php echo $titulo;?> de Pessoa</h1>
        <br />

        <?php
            if (isset($_GET['msg'])) {
                echo '<h4>' . $_GET['msg'] . '</h4>';
            }
        ?>

        <form action="gravar.php" method="post">
            <input type="hidden" name="id" value="<?php echo $id;?>" />
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome;?>" />

            <br />

            <label for="data_nascimento">Data de nascimento:</label>
            <input type="text" name="data_nascimento" value="<?php echo $data_nascimento;?>" />
            <br />

            <label for="observacao">Observação:</label>
            <textarea cols="40" rows="2 " name="observacao"><?php echo $observacao;?></textarea>

            <br />
            <input type="submit" name="comando" value="Salvar" />
            <? if ($id) : ?>
            <input type="submit" name="comando" value="Excluir" />
            <? endif; ?>
            <input type="button" value="Voltar" onclick="javascript:document.location='index.php';" />
        </form>
    </body>
</html>