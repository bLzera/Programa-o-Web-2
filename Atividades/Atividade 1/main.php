<?php
require_once('../headers.php');

$data = $_REQUEST;
$dataShow = '';

foreach($data as $key => $val){
    $dataShow = $dataShow . "$key - $val<br>";
}

$method = $_SERVER['REQUEST_METHOD'];


$headers = apache_request_headers();
$headersShow = '';

foreach($headers as $key => $val){
    $headersShow = $headersShow . "$key - $val<br>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php setPageHead() ?>
    <title>Dados da requisição</title>
</head>
<body>
    <div class="content dadosRequisicao">
        <section class="requestData">            
            <h2 class="pageTitle">Dados da requisição</h2>
            <div class="dataContainer">
                <div class="dataBlock">
                    <h4>Dados enviados</h4>
                    <div class="data">
                        <span><?= $dataShow ?></span>
                    </div>
                </div>
                <div class="dataBlock">
                    <h4>Método utilizado</h4>
                    <div class="data">
                        <span><?= $method ?></span>
                    </div>
                </div>
                <div class="dataBlock">
                    <h4>Headers da requisição</h4>
                    <div class="data">
                        <span><?= $headersShow ?></span>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
</html>