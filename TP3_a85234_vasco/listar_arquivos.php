<?php
$directory = "C:\\Users\\vasco\\Downloads\\UniServerZ\\www\\TP3\\TP3_a85234_vasco\\uploads";

$files = scandir($directory);
$files = array_diff($files, array('.', '..'));

foreach ($files as $file) {
    echo "<br>";
    echo "<div>";
    echo "$file";
    echo " <button onclick=\"excluirArquivo('".urlencode($file)."')\">Excluir</button>";
    echo " <button onclick=\"download('".urlencode($file)."')\">Download</button>";
    echo "</div>";
}
?>
