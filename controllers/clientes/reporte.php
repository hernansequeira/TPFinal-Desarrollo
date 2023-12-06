<?php

include_once  '../../models/clientes.php';

include_once  '../../vendor/fpdf/fpdf.php';

$clientes =  Cliente::all();

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10, 'Lista de Clientes');
$pdf->Image('logo.png',60,11,7);

$pdf->Ln();

$pdf->SetFont('Arial','B',16);
$pdf->Cell(40,10,'Nombre', 1, 0, 'C', 0);
$pdf->Cell(40,10,'Apellido', 1, 0, 'C', 0);
$pdf->Cell(110,10,'Email', 1, 0, 'C', 0);

$pdf->Ln();

$pdf->SetFont('Arial','',12);
foreach ($clientes as $cliente){
    $pdf->Cell(40,10,$cliente->nombre, 1, 0, 'C', 0);
    $pdf->Cell(40,10,$cliente->apellidos, 1, 0, 'C', 0);
    $pdf->Cell(110,10,$cliente->email, 1, 0, 'C', 0);
    $pdf->Ln();
}


$pdf->Output();