<?php
require('classes/login.php');
require('classes/cadastro.class.php');

$validador = new Login();
$validador->verificar_logado();

$idVaga = $_POST["idVaga"];
$delete = new Cadastro();
$delete->deletarVaga($idVaga);
unset($delete);
