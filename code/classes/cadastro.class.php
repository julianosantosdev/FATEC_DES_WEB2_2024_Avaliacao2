<?php
require('conexao.class.php');

class Cadastro
{
    private $conectarDB;

    function __construct()
    {
        $this->conectarDB = new Conexao();
        $this->conectarDB->conectar();
    }

    public function inserirVaga($nomeEmpresa, $numeroTelefone, $emailContato, $descricao, $curso) {
        
    }

    function __destruct()
    {
        $this->conectarDB = null;
    }
}
