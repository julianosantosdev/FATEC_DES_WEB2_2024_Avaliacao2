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
    <title>Cadastro de Vagas</title>
</head>

<body>
    <main>
        <form action="" method="POST">
            <fieldset>
                <label for="nomeEmpresa">Nome da Empresa</label>
                <input type="text" id="nomeEmpresa" name="nome_empresa" placeholder="Nome da empresa">
            </fieldset>

            <fieldset>
                <label for="numeroTel">Telefone</label>
                <input type="text" id="numeroTel" name="numero_whatsapp" placeholder="Telefone">
            </fieldset>

            <fieldset>
                <label for="emailContato">Email</label>
                <input type="text" id="emailcontato" name="email_contato" placeholder="Email de contato">
            </fieldset>

            <fieldset>
                <label for="descritivoVaga">Descrição</label>
                <input type="text" id="descritivoVaga" name="descritivo_vaga" placeholder="Descrição da Vaga">
            </fieldset>

            <fieldset>
                <label for="curso">Curso</label>
                <select name="curso" id="curso">
                    <option selected default hidden>Lista de laboratórios</option>
                    <option value="1">DSM</option>
                    <option value="2">GE</option>
                </select>
            </fieldset>
        </form>
    </main>

</body>

</html>