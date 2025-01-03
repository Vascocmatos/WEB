<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $a = $_POST['valor_1']; 
        $b = $_POST['valor_2'];

        // Calcula a soma
        $soma = $a + $b;

        // Exibe em um popup
        echo "<script>alert('A soma é: $soma');</script>";
    }
?>
