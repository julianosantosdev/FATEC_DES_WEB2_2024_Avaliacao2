<?php
class Conexao
{
    private $conexao;

    public function __construct()
    {
        $this->conectar();
    }

    private function conectar()
    {
        try {
            $this->conexao = new PDO("mysql:host=localhost;dbname=vagas", "juliano", "123456");
            $this->conexao->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo ("Falha na conexão: " . $e->getMessage());
            exit();
        }
    }

    public function obterConexao()
    {
        return $this->conexao;
    }

    public function __destruct()
    {
        $this->conexao = null;
    }
}
