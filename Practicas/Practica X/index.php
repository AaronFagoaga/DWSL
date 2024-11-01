<?php

require 'vendor/autoload.php';
use Dompdf\Dompdf;

$dompdf = new Dompdf();
$html = '
<html>
<head>
    <style>
        table{ width: 100%; border-collapse: collapse;}
        th, td { border:1px solid #000; padding: 8px; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Cantidad</th>
                <th>Precio</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Pilsener</td>
                <td>40</td>
                <td>$ 1.60</td>
            </tr>
            <tr>
                <td>Guau Guagu</td>
                <td>2</td>
                <td>$ 0.50</td>
            </tr>
            <tr>
                <td>Coca cola</td>
                <td>10</td>
                <td>$ 2.25</td>
            </tr>
        </tbody>
    </table>
</body>
</html>
';

//Cargar contenido html
$dompdf->load_html($html);

//Configurar el tamaño de la página:
$dompdf->setPaper('A4', 'portrait');

//Renderiar pdf
$dompdf->render();

//Enviar pdf al navegador
$dompdf->stream("reporte_de_productos", ["Attachment"=> true]);