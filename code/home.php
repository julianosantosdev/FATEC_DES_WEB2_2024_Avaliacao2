<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();
?>

<!DOCTYPE html>
<html lang="pt-br">
<link rel="stylesheet" href="./styles/reset.css">
<link rel="stylesheet" href="./styles/home.css">
<link rel="stylesheet" href="./styles/botao.css">

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Vagas de Estágio</title>
</head>

<body>
    <center>
        <h2>Vagas de Estágio</h2>
        <?php if ($_SESSION["logged_in"] = TRUE): ?>
            <div class="opcoes">
                <a class="botoesHome" href="cadastrarVaga.php">CADASTRAR VAGA</a>
                <a class="botoesHome" href="listarVagas.php">LISTAR VAGA</a>
                <a class="botoesHome" href=".php">REMOVER VAGA</a>
                <a class="botoesHome" href="login.php">LOGOUT</a>
            </div>
        <?php endif; ?>
    </center>
    <br>
</body>

</html>