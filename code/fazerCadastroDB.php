<?php
require('classes/conexao.class.php');
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();
$conn = new Conexao;
$conn->conectar();

