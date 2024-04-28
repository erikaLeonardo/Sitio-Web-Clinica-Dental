<?php
require('fpdf/fpdf.php');
require('conexion/conexion.php');

$anio2R = $_POST['txtanio2'];
$mesR = $_POST['cmbMes'];

$pdf = new FPDF('L','mm', 'A4');
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
	$pdf->Image('img/color1.png', 0, 0, 80);
	$pdf->Image('img/color1.png', 80, 0, 80);
	$pdf->Image('img/color1.png', 150, 0, 80);
	$pdf->Image('img/color1.png', 200, 0, 80);
	$pdf->Image('img/color1.png', 240, 0, 80);
$pdf->Image('img/logo.png', 20, 3, 43);
$pdf->Cell(110, 10, '', 0);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(100, 10, 'Clinica Dental Arce', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(0, 10, 'Fecha Actual: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(110, 8, '', 0);
$pdf->Cell(100, 8, 'Dra. Laura Arce Hernandez', 0);
$pdf->Cell(50, 8, 'Anio: '.$anio2R.' Mes: '.$mesR, 0 );
$pdf->Ln(18);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(16, 8, '', 0);
$pdf->Image('img/color2.png', 0, 39, 35);
$pdf->Image('img/color2.png', 30, 39, 35);
$pdf->Image('img/color2.png', 60, 39, 35);
$pdf->Image('img/color2.png', 90, 39, 35);
$pdf->Image('img/color2.png', 120, 39, 35);
$pdf->Image('img/color2.png', 150, 39, 35);
$pdf->Image('img/color2.png', 180, 39, 35);
$pdf->Image('img/color2.png', 210, 39, 35);
$pdf->Image('img/color2.png', 240, 39, 35);
$pdf->Image('img/color2.png', 270, 39, 35);
$pdf->Image('img/color2.png', 270, 39, 35);
$pdf->Cell(50, 8, 'No.', 0 );
$pdf->Cell(50, 8, 'FECHA', 0);
$pdf->Cell(50, 8, 'PACIENTE', 0);
$pdf->Cell(50, 8, 'HORA', 0);
$pdf->Cell(50, 8, 'TRATAMIENTO', 0);
$pdf->Ln(18);


$pdf->SetFont('Arial', '', 8);
//CONSULTA

$consulta = "CALL reporteMes('$anio2R','$mesR')";
$ejecConsulta = mysqli_query($conectar, $consulta);

while($reg = mysqli_fetch_array($ejecConsulta)){
	$pdf->Cell(15, 8, '  ', 0 );
	$pdf->Cell(50, 8, $reg[0], 0);
	$pdf->Cell(50, 8, $reg[1], 0);
	$pdf->Cell(50, 8, $reg[2], 0);
	$pdf->Cell(50, 8, $reg[3], 0);
	$pdf->Cell(50, 8, $reg[4], 0);
	// $pdf->Cell(25, 8,$reg[], 0);
	// $pdf->Cell(64, 8,$reg[''], 0);
	// $pdf->Cell(30, 8,$reg[''], 0);
	// $pdf->Cell(0, 8,$reg[''], 0); 
	  $pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(114,8,'',0);
//$pdf->Cell(31,8,'PIE DE PÁGINA',0);
$pdf->Output();
?>