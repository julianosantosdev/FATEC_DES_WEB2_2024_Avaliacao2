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

    public function deletarVaga($idVaga)
    {
        try {
            $sql = "DELETE FROM vagas WHERE id=:id";

            $preparaQuery = $this->pdo->prepare($sql);


            $preparaQuery->execute([
                ':id' => $idVaga
            ]);

            if ($preparaQuery->rowCount() > 0) {
                echo "Vaga deletada com sucesso!";
            } else {
                echo "Nenhuma vaga encontrada com o ID fornecido.";
            }
        } catch (PDOException $e) {
            echo "Erro ao deletar o registro: " . $e->getMessage();
        }
    }

    public function __destruct()
    {
        $this->pdo = null;
    }
}
