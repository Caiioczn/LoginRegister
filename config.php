<?php

// Verifica se o formulário foi enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtém os valores do formulário
    $nome = $_POST["Nome"];
    $senha = $_POST["senha"];
    $senha2 = $_POST["senha2"];

    // Verifica se as senhas coincidem
    if ($senha === $senha2) {
        // Conexão com o banco de dados
        $dbHost = 'Localhost';
        $dbUsername = 'root';
        $dbPassword = '';
        $dbName = 'registro';
    
        $conn = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);
        // Verifica se a conexão foi estabelecida corretamente
        if ($conn->connect_error) {
            die("Conexão falhou: " . $conn->connect_error);
        }

        // Insere os dados na tabela
        $sql = "INSERT INTO usuario (Nome, Senha) VALUES ('$nome', '$senha')";
        
        if ($conn->query($sql) === TRUE) {
            $mensagem = "Registro inserido com sucesso.";
            $conn -> close();

            header("Location: 404.php");
            exit();

        } else {
            $mensagem = "Erro ao inserir registro: " . $conn->error;
        }

        // Fecha a conexão
        $conn->close();
    } else {
        echo "As senhas não coincidem.";
    }
}
?>

    