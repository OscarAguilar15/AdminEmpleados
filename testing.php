<?php

require_once 'lib/dompdf/autoload.php';

// Crea un objeto PDFDom
$pdf = new \Mpdf\Mpdf();

// Carga la imagen en el objeto PDFDom
$image = $pdf->image('imagen.jpg', 0, 0, 8, 5);

// Crea un texto que se colocará encima de la imagen
$texto = $pdf->text('Este es un texto', 5, 10);

// Añade el texto al objeto PDFDom
$pdf->addPage();
$pdf->addImage($image);
$pdf->addText($texto);

// Guarda el objeto PDFDom como un archivo PDF
$pdf->output('imagen_con_texto.pdf', 'F');

?>