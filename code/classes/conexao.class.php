<?php
    class Conexao {
        private $conexao;    
        public function conectar() {
            try {
                $this->conexao = new PDO("mysql:host=localhost;dbname=vagas", "root", "");
            } catch (PDOException $e) {
                echo ("Falha na conexão" . $e->getMessage());
                exit();
            }
        }

        public function fecharConexao() {
            $this->conexao = null;
        }
    }
?>