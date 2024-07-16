<?php

class Conexao {
    private $usuario;
    private $senha;
    private $banco;
    private $servidor;
    private static $pdo;

    public function __construct() {
        $this->usuario = "root";
        $this->senha = "";
        $this->banco = "sistema";
        $this->servidor = "localhost";
    }

    public function conectar() {
        try {
            if (is_null(self::$pdo)) {
                self::$pdo = new PDO("mysql:host=" . $this->servidor . ";dbname=" . $this->banco, $this->usuario, $this->senha);
                self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            }

            return self::$pdo;
            
        } catch (PDOException $ex) {
            echo "Erro de conexão: " . $ex->getMessage();
            return null;
        }
    }
}
?>
