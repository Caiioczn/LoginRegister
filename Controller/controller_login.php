<?php
require_once '../Modell/modelo_login.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nomeUsuario = $_POST["Usuário"];
    $senha = $_POST["Senha"];

    $databaseLogin = new DatabaseLogin();
    $mensagem = $databaseLogin->fazerLogin($nomeUsuario, $senha);
}
?>
