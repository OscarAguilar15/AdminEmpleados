<?php
require_once '../vendor/autoload.php';
require_once 'modulos/pdf.php';

$matricula = $_POST['matricula'];
$nombre = $_POST['nombre'];
$categoria = $_POST['categoria'];
$departamento = $_POST['departamento'];
$horario = $_POST['turno'];
$imagen = $_POST['imagen'];
var_dump($_POST);


$html= getHTML($matricula, $nombre, $categoria, $departamento, $horario, $imagen);

// Crea una nueva instancia de mPDF
$mpdf = new \Mpdf\Mpdf(['mode' => 'utf-8', 'format' => 'A4']);

// Inserta el HTML
$mpdf->WriteHTML($html);

// Genera el PDF
$mpdf->Output();
?>
