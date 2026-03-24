<?php

require __DIR__ . '/vendor/autoload.php';

use Mpdf\Mpdf;

class geradorDePdf{
    public function gerar($texto){
        $mpdf = new Mpdf();
        $mpdf->WriteHTML($texto);
        $mpdf->Output();
    }
}

$app = new geradorDePdf();
$app->gerar('<p>olha só meu pdf!</p>');