<?php

class Database {
    private $dbHost = 'Localhost';
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

    public function insertUsuario($nome, $senha) {
        $sql = "INSERT INTO usuario (Nome, Senha) VALUES ('$nome', '$senha')";
        
        if ($this->conn->query($sql) === TRUE) {
            $this->conn->close();
            return true;
        } else {
            return false;
        }
    }
}
?>
