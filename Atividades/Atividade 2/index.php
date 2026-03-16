<?php
require_once('../headers.php');

$helloWorld = 'Aplicação que exibe Hello World!';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php setPageHead()?>
    <title>Aplicação Atividade 2</title>
</head>
<body>
    <h2 style="transition: all .3s ease;"><?= $helloWorld ?></h2>
    <a class="formBtn btnSolto" onclick="flip()">flipar</a>
</body>
</html>
<script src="script.js"></script>