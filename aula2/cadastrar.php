<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Treinamento PHP - Aula 2</title>
    </head>
    <body>
        <h1>Cadastro de Pessoa</h1>
        <br />

        <?php
            if (isset($_GET['msg'])) {
                echo '<h4>' . $_GET['msg'] . '</h4>';
            }

            $nome = '';
            if (isset($_GET['nome'])) {
                $nome = $_GET['nome'];
            }

            $data_nascimento = '';
            if (isset($_GET['data_nascimento'])) {
                $data_nascimento = $_GET['data_nascimento'];
            }
        ?>

        <form action="gravar.php" method="post">
            <label for="nome">Nome:</label>
            <input type="text" name="nome" value="<?php echo $nome;?>" />

            <br />

            <label for="data_nascimento">Data de nascimento:</label>
            <input type="text" name="data_nascimento" value="<?php echo $data_nascimento;?>" />
            <br />

            <label for="observacao">Observação:</label>
            <textarea cols="40" rows="2 " name="observacao"></textarea>

            <br />
            <input type="submit" value="Salvar" />
        </form>
    </body>
</html>