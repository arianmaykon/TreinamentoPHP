<?php
/**
 * Loga (adiciona) informações à um arquivo default.
 *
 * @param mixed $content
 */
function logToFile($content) {
    // Altera a informação que vai ser logado adicionando na frente a data [ANO-MES-DIA HORA:MINUTOS:SEGUNDOS]
    $content = '[' . date('Y-m-d H:i:s') . '] ' . $content;

    // Adiciona no arquivo a informação montada, adicionando-a ao final do arquivo
    file_put_contents('../debug.log', $content, FILE_APPEND);
}

?>