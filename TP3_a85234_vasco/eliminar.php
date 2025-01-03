<?php
if(isset($_GET['nome'])) {
    $nomeArquivo = $_GET['nome'];

    $caminhoArquivos = "C:\\Users\\vasco\\Downloads\\UniServerZ\\www\\TP3\\TP3_a85234_vasco\\uploads";

    $caminhoCompleto = $caminhoArquivos . '/' . $nomeArquivo;

    if (unlink($caminhoCompleto)) {
        echo "Arquivo '" . $nomeArquivo . "' excluído com sucesso!";
        $sql_delete = "DELETE FROM files WHERE name = '$nomeArquivo' AND path = '$caminhoCompleto'";
    } else {
        echo "Erro ao excluir o arquivo '" . $nomeArquivo . "'.";
    }
} else {
    echo "Nome do arquivo não recebido.";
}
?>
