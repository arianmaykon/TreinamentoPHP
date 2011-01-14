<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Treinamento PHP - Aula 2</title>
    </head>
    <body>
        <h1>Listagem de Pessoas</h1>
        <br />

        <?php
            if (isset($_GET['msg'])) {
                echo '<h4>' . $_GET['msg'] . '</h4>';
            }
        ?>

        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOME</th>
                    <th>DATA DE NASCIMENTO</th>
                    <th>OBSERVAÇÃO</th>
                </tr>
            </thead>
            <tbody>
                <?php

                    $con = mysql_connect('localhost', 'root', '');
                    mysql_select_db('treinamentophp');

                    $sql = 'SELECT * FROM pessoa';

                    $resultado = mysql_query($sql);

                    while ($row = mysql_fetch_assoc($resultado)) {
                        echo "<tr>
                            <td>" . $row['id'] . "</td>
                            <td>" . $row['nome'] . "</td>
                            <td>" . $row['data_nascimento'] . "</td>
                            <td>" . $row['observacao'] . "</td>
                        </tr>";
                    }
                    mysql_close($con);
                ?>
            </tbody>
        </table>

        <br />

<!--
        <input type="button" value="Meu input button" />
        <input type="submit" value="Meu submit" />
        <button>Meu button</button>
-->

        <a href="cadastrar.php">Cadastrar nova Pessoa</a>

    </body>
<!--    <td><a href='editar.php?id=" . $row['id'] . "'>" . $row['id'] . "</a></td>-->
</html>