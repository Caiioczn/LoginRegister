<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nomeUsuario = $_POST["Usuário"];
    $senha = $_POST["Senha"];

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbName = 'registro';

    $conn = new mysqli($dbHost, $dbUsername, $dbPassword, $dbName);
    if ($conn->connect_error) {
        die("Conexão falhou: " . $conn->connect_error);
    }

    $query = "SELECT Senha FROM usuario WHERE Nome = '$nomeUsuario'";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        $senhaArmazenada = $row["Senha"];

        if ($senha === $senhaArmazenada) {
            echo "Login feito com sucesso";
        } else {
            echo "Senha incorreta.";
        }
    } else {
        echo "Usuário não encontrado.";
    }

    $conn->close();
}
?>
