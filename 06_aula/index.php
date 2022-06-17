<?php

include 'vendor/autoload.php';

use Classes\Config\Usuario as UsuarioConfig;
use Classes\Categoria as Categoria;
use Dompdf\Dompdf;

$dompdf = new Dompdf();

$html = '';

for ($n = 0; $n < 10; $n++){
    $html .= 'Ó o pente! <br>';
}

$dompdf->loadHtml('<h1>Olá mundo! Estou aprendendo PHP</h1>'.$html);

$dompdf->render();

$dompdf->stream();