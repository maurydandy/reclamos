<?php

if(strlen($_GET['desde'])>0 and strlen($_GET['hasta'])>0){
	$desde = $_GET['desde'];
	$hasta = $_GET['hasta'];

	$verDesde = date('d/m/Y', strtotime($desde));
	$verHasta = date('d/m/Y', strtotime($hasta));
}else{
	$desde = '1111-01-01';
	$hasta = '9999-12-30';

	$verDesde = '__/__/____';
	$verHasta = '__/__/____';
}
require('../fpdf/fpdf.php');
require('conexion.php');
 //$N° = htmlentities($N°, ENT_QUOTES,'UTF-8'); // así de sencillo

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
//$pdf->Image('../recursos/tienda.gif' , 10 ,8, 10 , 13,'GIF');
$pdf->Cell(18, 10, '', 0);
//$pdf->Cell(150, 10, 'Prueba"', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE ACTAS DE INFRACCION POR FECHA ', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
$pdf->Cell(100, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'N', 0);
$pdf->Cell(15, 8, 'CUIT', 0);
$pdf->Cell(25, 8, 'Empresa', 0);
$pdf->Cell(30, 8, 'NOMBRE', 0);
$pdf->Cell(30, 8, 'EXPEDIENTE', 0);
$pdf->Cell(25, 8, 'ACTA', 0);
$pdf->Cell(25, 8, 'FECHA', 0);
$pdf->Cell(25, 8, 'INSPECTOR', 0);

//$pdf->Cell(25, 8, 'P. Distribuidor', 0);
//$pdf->Cell(25, 8, 'Fech. Registro', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
//$productos = mysql_query("SELECT * FROM productos WHERE fecha_reg BETWEEN '$desde' AND '$hasta' ");
$productos = mysql_query("SELECT * FROM agenda  ");
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysql_fetch_array($productos)){
	$item = $item+1;
	$totaluni = $item  ;
	//$totaldis = $totaldis + $productos2['precio_dist'];
	$pdf->Cell(10, 8, $item, 0);
	
	$pdf->Cell(15, 8,$productos2['cuit'], 0);
	$pdf->Cell(25, 8, $productos2['empresa'], 0);
	$pdf->Cell(30, 8, $productos2['nfantasia'], 0);
	$pdf->Cell(30, 8, $productos2['expe'], 0);
	$pdf->Cell(25, 8, $productos2['acta'], 0);

	$pdf->Cell(25, 8, $productos2['fecha'], 0);
	//$pdf->Cell(25, 8, $productos2['hora'], 0);

	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);
$pdf->Cell(31,8,'Total : '.$totaluni,0);
//$pdf->Cell(32,8,'Total Dist: S/. '.$totaldis,0);
$pdf->Output();
?>