<?php
// Inclui neste arquivo um arquivo com funções auxiliares
require_once('../lib/functions.php');

// Configura URL padrão
$url = 'index.php';

// Obtém o valor do submit enviado
$comando = trim($_POST['comando']);
$isDelete = (strcasecmp($comando, 'EXCLUIR') == 0);

// Obtém os dados do formulário retirando os espaços desnecessários
$id = (int) isset($_POST['id'])?$_POST['id']:0;
$nome = trim($_POST['nome']);
$data_nascimento = trim($_POST['data_nascimento']);
$observacao = trim($_POST['observacao']);

// Flag (boleano) de controle para validação
$dadosValidados = true;

// Verificar se os dados obrigatórios foram informados
if ((empty($nome) || empty($data_nascimento)) && !$isDelete) {
    // Se algum deles não foi informado, altera flag de controle de validação para false
    $dadosValidados = false;
}

//TODO: (TODO significa 'a fazer') Validar a Data de Nascimento!

// Se os dados foram validados...
if ($dadosValidados) {
    // Abre conexão com o MySQL
    $con = mysql_connect('localhost', 'root', 'root');
    if (!$con) {
        // Aborta o processamento se não conseguiu abrir a conexão com o MySQL, informando o usuário
        die('Erro ao conectar com o banco de dados!');
    }

    // Seleciona o banco de dados que vai trabalhar
    if (!mysql_select_db('treinamentophp')) {
        // Aborta o processamento se não conseguiu selecionar o banco (pode não existir), informando o usuário
        die('Erro ao selecionar o banco de dados!');
    }

    // Mensagem padrão para INSERT e UPDATE
    $msg = 'Dados salvos com sucesso!';

    if ($id) {
        // Monta a string SQL para atualizar
        $sql = "UPDATE pessoa SET nome = '" . $nome . "', data_nascimento = '"
            . $data_nascimento . "', observacao = '" . $observacao . "' WHERE id = " . $id;

        // Se clicou no botão de excluir (submit enviado)...
        if ($isDelete) {
            // Monta a string SQL para exclusão
            $sql = "DELETE FROM pessoa WHERE id = " . $id;
            // Altera a mensagem para DELETE
            $msg = 'Dados excluídos com sucesso!';
        }
    } else {
        // Monta a string SQL para inserir
        $sql = "INSERT INTO pessoa (nome, data_nascimento, observacao) VALUES ('"
            . $nome . "', '" . $data_nascimento . "', '" . $observacao . "')";
    }

    // Coloca no log o SQL montado, para debug
    logToFile($sql);

    // Executa o comando SQL
    $resultado = mysql_query($sql);

    // Coloca no log o resultado da query, para debug
    logToFile($resultado);

    // Se o SQL foi executado com sucesso...
    if ($resultado) {
        $url = 'index.php?msg=' . $msg;
    } else {
        $msg = 'Falha ao salvar os dados! [' . mysql_error() . ']';
        $url = 'cadastrar.php?msg=' . $msg . '&nome=' . $nome . '&data_nascimento=' . $data_nascimento;
    }
} else {
    $msg = 'Nome e Data de Nascimento são obrigatórios!';
    $url = 'cadastrar.php?msg=' . $msg . '&nome=' . $nome . '&data_nascimento=' . $data_nascimento;
}

// Fecha a conexão
mysql_close($con);

// Redireciona para a URL configurada
header('Location: ' . $url);
?>