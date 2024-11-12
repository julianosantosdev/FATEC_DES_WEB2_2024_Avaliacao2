<?php
require('classes/login.php');
$validador = new Login();
$validador->verificar_logado();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./styles/reset.css">
  <link rel="stylesheet" href="./styles/listarVagas.css">
  <link rel="stylesheet" href="./styles/botao.css">

  <title>Lista de Vagas</title>
</head>

<body>
  <main>
    <?php
    require('classes/conexao.class.php');
    $conexaoDB = new Conexao();
    $pdo = $conexaoDB->obterConexao();
    $consulta = $pdo->query("SELECT * FROM vagas");

    if ($consulta->rowCount() > 0) {
      echo "<center>";
      echo "<table>";
      echo "<tr>";

      for ($i = 0; $i < $consulta->columnCount(); $i++) {
        $meta = $consulta->getColumnMeta($i);
        echo "<th>" . htmlspecialchars($meta['name']) . "</th>";
      }

      echo "</tr>";

      while ($linha = $consulta->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";

        foreach ($linha as $chave => $col) {
          if ($chave == "curso") {
            if ($col == 1) {
              echo "<td>" . htmlspecialchars("DSM") . "</td>";
            } else {
              echo "<td>" . htmlspecialchars("GE") . "</td>";
            }
          } else {
            echo "<td>" . htmlspecialchars($col) . "</td>";
          }
        }
        echo "</tr>";
      }
      echo "</table>";
      echo "<a href='home.php'>VOLTAR</a>";
      echo "</center>";
    } else {
      echo "<p>Não foram encontradas vagas :(</p>";
    }
    $conexaoDB = null;
    ?>
  </main>

</body>

</html>