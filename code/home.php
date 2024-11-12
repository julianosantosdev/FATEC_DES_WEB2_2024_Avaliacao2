<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();
?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="./styles/reset.css">
<link rel="stylesheet" href="./styles/home.css">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
</head>

<body>
    <center>
        <h2>Vagas de Estágio</h2>
        <?php if ($_SESSION["logged_in"] = TRUE): ?>
            <div class="opcoes">
                <a href="cadastrarVaga.php">CADASTRAR VAGA</a>
                <a href=".php">LISTAR VAGA</a>
                <a href=".php">REMOVER VAGA</a>
                <a href="login.php">LOGOUT</a>
            </div>
        <?php endif; ?>
    </center>
    <br>
</body>

</html>