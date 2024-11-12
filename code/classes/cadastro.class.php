<?php
require('conexao.class.php');

class Cadastro
{
    private $pdo;

    public function __construct()
    {
        $conectarDB = new Conexao();
        $this->pdo = $conectarDB->obterConexao();
    }

    public function inserirVaga($nomeEmpresa, $numeroTelefone, $emailContato, $descricao, $curso)
    {
        try {
            $sql = "INSERT INTO vagas 
            (nome_empresa, numero_whatsapp, email_contato, descritivo_vaga, curso) 
            VALUES(:empresa, :telefone, :email, :descr, :nomeDoCurso)";

            $preparaQuery = $this->pdo->prepare($sql);

            $empresa = $nomeEmpresa;
            $telefone = $numeroTelefone;
            $email = $emailContato;
            $descr = $descricao;
            $nomeDoCurso = $curso;

            $preparaQuery->execute([
                ':empresa' => $empresa,
                ':telefone' => $telefone,
                ':email' => $email,
                ':descr' => $descr,
                ':nomeDoCurso' => $nomeDoCurso
            ]);

            return true;
        } catch (PDOException $e) {
            echo "Erro ao inserir a vaga: " . $e->getMessage();
            return false;
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}
