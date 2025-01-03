<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $valor1 = $_POST["valor1"];
    $valor2 = $_POST["valor2"];
    $soma = $valor1 + $valor2;
    echo $soma;
}
?>