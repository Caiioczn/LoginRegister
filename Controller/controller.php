<?php
require_once 'modelo.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = $_POST["Nome"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];

    if ($senha === $senha2) {
        $database = new Database();
        $success = $database->insertUsuario($nome, $senha);

        if ($success) {
            header("Location: 404.php");
            exit();
        } else {
            $mensagem = "Erro ao inserir registro.";
        }
    } else {
        $mensagem = "As senhas não coincidem.";
    }
}
?>
