<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();
?>

<!DOCTYPE html>
<html lang="ptbr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/reset.css">
  <link rel="stylesheet" href="./styles/cadastrarVaga.css">
  <link rel="stylesheet" href="./styles/botao.css">
  <title>Deletar Vaga</title>
</head>

<body>
  <main>
    <form action="fazerDelecaoDB.php" method="POST">
      <fieldset>
        <label for="idVaga">ID da vaga</label>
        <input type="text" name="idVaga" id="idVaga" placeholder="Informe o ID da vaga..." required="required">
      </fieldset>
      <input type="submit" value="DELETAR">
    </form>
    <a href='home.php'>VOLTAR</a>
  </main>

</body>

</html>