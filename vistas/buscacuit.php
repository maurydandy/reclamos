<?php
$conexion = mysql_connect('127.0.0.1', 'root', '');
mysql_select_db('login', $conexion);

function fechaNormal($fecha){
		$nfecha = date('d/m/Y',strtotime($fecha));
		return $nfecha;
}
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
//require('php/conexion.php');

$pdf = new FPDF();
$pdf->AddPage();
$pdf->SetFont('Arial', '', 10);
$pdf->Image('../recursos/tienda.gif' , 10 ,8, 10 , 13,'GIF');
$pdf->Cell(18, 10, '', 0);
$pdf->Cell(150, 10, 'Prueba"', 0);
$pdf->SetFont('Arial', '', 9);
$pdf->Cell(50, 10, 'Hoy: '.date('d-m-Y').'', 0);
$pdf->Ln(15);
$pdf->SetFont('Arial', 'B', 11);
$pdf->Cell(70, 8, '', 0);
$pdf->Cell(100, 8, 'LISTADO DE Compulsas jklajskfjasdlkfjklsañj salkdjflkasdjfasdlfjlkasdjflñsafkjsadlkñ', 0);
$pdf->Ln(10);
$pdf->Cell(60, 8, '', 0);
//$pdf->Cell(100, 8, 'Desde: '.$verDesde.' hasta: '.$verHasta, 0);
$pdf->Ln(23);
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(15, 8, 'Cuit', 0);
$pdf->Cell(70, 8, 'Empresa', 0);
$pdf->Cell(40, 8, 'Expediente', 0);
$pdf->Cell(25, 8, 'Acta', 0);
$pdf->Cell(25, 8, 'fecha', 0);
$pdf->Cell(25, 8, 'hora', 0);

//$pdf->Cell(25, 8, 'P. Distribuidor', 0);
//$pdf->Cell(25, 8, 'Fech. Registro', 0);
$pdf->Ln(8);
$pdf->SetFont('Arial', '', 8);
//CONSULTA
//$productos = mysql_query("SELECT * FROM productos WHERE fecha_reg BETWEEN '$desde' AND '$hasta' ");
//$productos = mysql_query("SELECT * FROM agenda WHERE fecha BETWEEN '$desde' AND '$hasta' OR cuit = '$cuit' ");

$productos = mysql_query("SELECT * FROM agenda where cuit = '$cuit'");

//"SELECT * FROM agenda WHERE id = '$id'";
$item = 0;
$totaluni = 0;
$totaldis = 0;
while($productos2 = mysql_fetch_array($productos)){
	$item = $item+1;
	//$totaluni = $totaluni + $productos2['precio_unit'];
	//$totaldis = $totaldis + $productos2['precio_dist'];
	$pdf->Cell(15, 8, $item, 0);
	$pdf->Cell(70, 8,$productos2['cuit'], 0);
	$pdf->Cell(40, 8, $productos2['empresa'], 0);
	$pdf->Cell(25, 8, $productos2['expe'], 0);
	$pdf->Cell(25, 8, $productos2['acta'], 0);

	$pdf->Cell(25, 8, date('d/m/Y', strtotime($productos2['fecha'])), 0);
	$pdf->Cell(25, 8, $productos2['hora'], 0);

	$pdf->Ln(8);
}
$pdf->SetFont('Arial', 'B', 8);
$pdf->Cell(104,8,'',0);
//$pdf->Cell(31,8,'Total Unitario: S/. '.$totaluni,0);
//$pdf->Cell(32,8,'Total Dist: S/. '.$totaldis,0);
//$pdf->Output('reporte.pdf','D');

$pdf->Output('reporte.pdf','D');
?>