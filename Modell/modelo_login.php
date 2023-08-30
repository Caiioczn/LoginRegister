<?php

class DatabaseLogin {
    private $dbHost = 'localhost';
    private $dbUsername = 'root';
    private $dbPassword = '';
    private $dbName = 'registro';
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->dbHost, $this->dbUsername, $this->dbPassword, $this->dbName);

        if ($this->conn->connect_error) {
            die("Conexão falhou: " . $this->conn->connect_error);
        }
    }

    public function fazerLogin($nomeUsuario, $senha) {
        $query = "SELECT Senha FROM usuario WHERE Nome = '$nomeUsuario'";
        $result = $this->conn->query($query);

        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $senhaArmazenada = $row["Senha"];

            if ($senha === $senhaArmazenada) {
                $this->conn->close();
                return "Login feito com sucesso";
            } else {
                $this->conn->close();
                return "Senha incorreta.";
            }
        } else {
            $this->conn->close();
            return "Usuário não encontrado.";
        }
    }
}
?>
