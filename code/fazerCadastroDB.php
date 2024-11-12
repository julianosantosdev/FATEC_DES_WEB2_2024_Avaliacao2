<?php
require('classes/login.php');
require('classes/cadastro.class.php');

$validador = new Login();
$validador->verificar_logado();

$empresa = $_POST["nome_empresa"];
$whatsapp = $_POST["numero_whatsapp"];
$email = $_POST["email_contato"];
$descricao = $_POST["descritivo_vaga"];
$curso = $_POST["curso"];

$insereVaga = new Cadastro();
$insereVaga->inserirVaga($empresa, $whatsapp, $email, $descricao, $curso);
unset($insereVaga);

header("Location: " . $_SERVER['HTTP_REFERER']);
exit();
