<?php
require_once('../headers.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php setPageHead() ?>
    <title>Atividade 1</title>
</head>
<body>
    <div class="content">
        <form action="main.php" method="get" class="dataForm">
            <div class="formField">
                <label for="name" class="fieldLabel">Nome completo</label>
                <input type="text" class="fieldInput" name="name" placeholder="Nome completo"/>
            </div>
            <div class="formField">
                <label for="telefone" class="fieldLabel">Telefone</label>
                <input type="number" class="fieldInput" name="telefone" placeholder="5555-5555"/>
            </div>
            <div class="formField">
                <label for="email" class="fieldLabel">E-mail</label>
                <input type="text" class="fieldInput" name="email" placeholder="exemplo@email.com"/>
            </div>
            <div class="formField inputMessage">
                <label for="mensagem" class="fieldLabel">Mensagem</label>
                <textarea name="mensagem" class="fieldInput" rows="5" placeholder="Mensagem"></textarea>
            </div>                
            <div class="formField btnSend">
                <input type="submit" class="formBtn" value="Enviar"/>
            </div>
        </form>
    </div>
</body>
</html>