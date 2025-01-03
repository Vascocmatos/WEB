<?php
$nome = $_POST["nome"];
$password = $_POST["password"];

// Verificar a senha no banco de dados ou em outro local seguro
if (verificarSenha($nome, $password)) {
    // Senha correta, pode criar o cookie e redirecionar o usuário
    setcookie("senha", $password, time() + (86400 * 30), "/"); // Cookie válido por 30 dias
    echo "Login bem-sucedido!";
} else {
    // Senha incorreta, enviar uma mensagem de erro
    echo "Nome de usuário ou senha incorretos.";
}

function verificarSenha($nome, $password) {
    // Lógica para verificar a senha (por exemplo, consultando um banco de dados)
    // Este é um exemplo simplificado e não seguro - você deve implementar sua própria lógica de verificação de senha segura
    return ($password === "senha_correta");
}
?>
