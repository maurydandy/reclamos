<?php

require('fpdf/fpdf.php');
//require('conexion.php');

require 'funcs/conexion.php';
class PDF extends FPDF
{
var $widths;
var $aligns;

function SetWidths($w)
{
	//Set the array of column widths
	$this->widths=$w;
}

function SetAligns($a)
{
	//Set the array of column alignments
	$this->aligns=$a;
}

function Row($data)
{
	//Calculate the height of the row
	$nb=0;
	for($i=0;$i<count($data);$i++)
		$nb=max($nb,$this->NbLines($this->widths[$i],$data[$i]));
	$h=5*$nb;
	//Issue a page break first if needed
	$this->CheckPageBreak($h);
	//Draw the cells of the row
	for($i=0;$i<count($data);$i++)
	{
		$w=$this->widths[$i];
		$a=isset($this->aligns[$i]) ? $this->aligns[$i] : 'L';
		//Save the current position
		$x=$this->GetX();
		$y=$this->GetY();
		//Draw the border
		
		$this->Rect($x,$y,$w,$h);

		$this->MultiCell($w,5,$data[$i],0,$a,'true');
		//Put the position to the right of the cell
		$this->SetXY($x+$w,$y);
	}
	//Go to the next line
	$this->Ln($h);
}

function CheckPageBreak($h)
{
	//If the height h would cause an overflow, add a new page immediately
	if($this->GetY()+$h>$this->PageBreakTrigger)
		$this->AddPage($this->CurOrientation);
}

function NbLines($w,$txt)
{
	//Computes the number of lines a MultiCell of width w will take
	$cw=&$this->CurrentFont['cw'];
	if($w==0)
		$w=$this->w-$this->rMargin-$this->x;
	$wmax=($w-2*$this->cMargin)*1000/$this->FontSize;
	$s=str_replace("\r",'',$txt);
	$nb=strlen($s);
	if($nb>0 and $s[$nb-1]=="\n")
		$nb--;
	$sep=-1;
	$i=0;
	$j=0;
	$l=0;
	$nl=1;
	while($i<$nb)
	{
		$c=$s[$i];
		if($c=="\n")
		{
			$i++;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
			continue;
		}
		if($c==' ')
			$sep=$i;
		$l+=$cw[$c];
		if($l>$wmax)
		{
			if($sep==-1)
			{
				if($i==$j)
					$i++;
			}
			else
				$i=$sep+1;
			$sep=-1;
			$j=$i;
			$l=0;
			$nl++;
		}
		else
			$i++;
	}
	return $nl;
}

function Header()
{
	//$this->Image('recursos/mem.jpg', 5, 5, 30 );
	$this->Image('recursos/logo.jpg', 20, 20, 180 );
	$this->SetFont('Arial','',10);
	$this->Text(20,14,'',0,'C', 0);
	$this->Ln(30);
}

function Footer()
{
	$this->SetY(-15);
	$this->SetFont('Arial','B',8);
	
	$this->Cell(100,10,'Inspector/es actuantes',0,0,'L');
	//$this->Cell(110,10,'__________________________',0,0,'L');
	$this->Cell(100,10,'Firma y aclaracion p/empresa      ',0,0,'L');

	$this->SetY(-20);
	$this->Cell(110,10,'_____________________',0,0,'L');
	
	
	$this->Cell(0,9,'_______________________',0,0 );
	//$this->Cell(0,15, 'Pagina '.$this->PageNo().'/{nb}',0,0,'C' );
	//$this->Cell(0,10,'Page '.$this->PageNo().'/{nb}',0,0,'C');  numero de pagina
}

}



class DB{
	var $conect;
  
	var $BaseDatos;
	var $Servidor;
	var $Usuario;
	var $Clave;
	function DB(){
		$this->BaseDatos = "login";
		$this->Servidor = "localhost";
		$this->Usuario = "root";
		$this->Clave = "computos";
	}

	 function conectar() {
		if(!($con=@mysql_connect($this->Servidor,$this->Usuario,$this->Clave))){
			echo"<h1> [:(] Error al conectar a la base de datos</h1>";	
			exit();
		}
		if (!@mysql_select_db($this->BaseDatos,$con)){
			echo "<h1> [:(] Error al seleccionar la base de datos</h1>";  
			exit();
		}
		$this->conect=$con;
		return true;	
	}
}

	$paciente= $_GET['id'];
	$con = new DB;
	$pacientes = $con->conectar();	
	
	$strConsulta = "SELECT * from agenda where id =  '$paciente'";
	
	$pacientes = mysql_query($strConsulta);
	
	$fila = mysql_fetch_array($pacientes);

	//$pdf=new PDF('L','mm','Letter'); //UTIL HOJA APAISADA
	$pdf=new PDF();
	$pdf->Open();
	//$pdf->Cell(11,11, $pdf->Image('../clinica1/recursos/mem.gif', $pdf->GetX(), $pdf->GetY(),11),1);
	//$pdf->Image('../clinica1/recursos/mem.gif',10,10,-300);
	$pdf->AddPage();
	$pdf->SetMargins(20,20,20); //MARGENES POSIBLE HOJA PAISADA
	$pdf->Ln(8);
//id, cuit, expe, empresa, acta 
    
    $pdf->SetFont('Arial','B',10);
   	$pdf->Cell(70, 8, '', 0);
   	 //$pdf->SetFont('Arial','',10);
 
 	$pdf->Cell(100, 8,'ACTA DE INSPECCION '.$fila['acta' ],0,1);
   
   	$pdf->Cell(70, 8, '', 0);
   	$pdf->Cell(100, 8,'REF.EXPTE.N: '.$fila['expe' ], 0,1);
 	$pdf->SetFont('Arial','',10);
 	$pdf->Cell(0,6,'En Mendoza con fecha  '.$fila['fecha' ] .' siendo las  '.$fila['hora'] .' se ha/n constituido el/los inspectores de la SUBSECRETARIA',0,1);
   	$pdf->Cell(0,6,'DE TRABAJO Y EMPLEO en el domicilio  '.$fila['domicilio'] .'  de la RAZON SOCIAL  ' .$fila['empresa' ] .'  que gira    ',0,1);
   	$pdf->Cell(0,6,'bajo el nombre comercial de  '.  $fila['nfantasia']   .'  CUIT N  '   .  $fila['cuit']    .'  establecido en el rubro de '  .  $fila['rubro']   ,0,1);
   	$pdf->Cell(0,6,'con domicilio ' .$fila['domicilio2'] . 'y siendo atendido por una persona que dijo ser (cargo) ' .$fila['cargo']  ,0,1);
   	$pdf->Cell(0,6,'acredito identidadcon C.I/D.U ' .$fila['dni'] .'  llamarse  '.  $fila['persona'].' de nacionalidad  '.$fila['nacion'].'  Mayor de edad',0,1);
    $pdf->Cell(0,6,'quien fija domicilio en '.$fila['domicilio3'],0,1);
   	$pdf->Cell(0,6,'Inspeccionado el establecimiento citado, respecto al cumplimiento de las dispocisiones vigentes,firma del rubro, bajo ',0,1);
    $pdf->Cell(0,6,'apercibimiento  de la ley, por este unico medio para que el dia  '.$fila['fechat'] .' se emplaza a la proximo a las '.$fila['horat'] .' hs, ' ,0,1);
    $pdf->Cell(0,6,'presente por ante este Organismo Administrativo sita en '.$fila['delega'] ,0,1);
    $pdf->Cell(0,6,'con la documentacion detallada a continuacion:' ,0,1);
    $pdf->Cell(0,6,'[ ]Libro Especial de Remuneraciones y/o Planillas Moviles de Liquidacion de Sueldos por  Computadora por el periodo:)' ,0,1);
    $pdf->Cell(0,6,$fila['sueldo1'].' a ' .$fila['sueldo2'].' de conformidad a lo estalecido por el articulo 52 de la L.C.T.' ,0,1);
   	$pdf->Cell(0,6,'[ ]Recibos de sueldos del personal por el periodo ' .$fila['recibo1']. ' a ' .$fila['recibo2'] ,0,1);
   	$pdf->Cell(0,6,'[ ]Comprobante de entrega de Ropa de Trabajo (formulario segun resolucion N 299/11 S.R.T) establecido en'  ,0,1);
   	$pdf->Cell(0, 6,'Art: '.$fila['art']. ' C.C.T.N: ' .$fila['cctn']. ' Ropa: '. $fila['ropa'],0,1);
   	$pdf->Cell(0,6,'[ ]Comprobante de Aportes Gremiales del periodo '.$fila['gre1' ] .' a '.$fila['gre2' ]  ,0,1);
   	$pdf->Cell(0,6,'[ ]Comprobante de Aportes Previsional y Sociales del periodo '.$fila['apor1' ] .' a '.$fila['apor2' ]  ,0,1);
   	$pdf->Cell(0,6,'[ ]Documentacion correspondiente al Sistema de control horario conforme a lo establecido por la resolucion '  ,0,1);
   	$pdf->Cell(0, 6,'N 6500/06 de S.T y E desde '.$fila['chora1' ] .' a '.$fila['chora2' ],0,1);
   	$pdf->Cell(0, 6,'[ ]Cronograma de Francos desde '.$fila['franco1' ] .' a '.$fila['franco2' ].'segun ley 11544.',0,1);
	$pdf->Cell(0, 6,'[ ]Respecto del Seguro Colectivo de Vida Obligatorio(Dec.1567/74) y a la A.R.T (ley 24557) se debera',0,1);
	$pdf->Cell(0, 6,'presentar contrato de afiliacion y/o Polizas de Cobertura por cada Trabajador de la empresa y los comprobantes' ,0,1);
	$pdf->Cell(0, 6,'de pago pertinentes por el periodo '.$fila['seguro1' ] .' a '.$fila['seguro2' ],0,1);
	$pdf->Cell(0, 6,'[ ]Cantidad de empleados relevados de la empresa '.$fila['emp' ] ,0,1);
	$pdf->Cell(0, 6,'segun relevamiento del personal N '.$fila['texto' ],0,1);
	$pdf->Cell(0, 6,'.............................................................................................................................................................................',0,1);
	$pdf->Cell(0, 6,'.............................................................................................................................................................................',0,1);
	$pdf->Cell(0, 6,'',0,1);
	$pdf->Cell(0, 6,'',0,1);
	$pdf->Cell(0, 6,'Leida y raficada en la fecha '.$fila['fecha' ].' siendo las ........ hs se entrega duplicado del presenta acta a la persona',0,1);
	$pdf->Cell(0, 6,'identificada, quien firma para constancia ante inspector que certifica la recepcion.',0,1);
	//$pdf->Cell(0, 6,'ACTA DE INSPECCION '.$fila['acta' ],0,1);

	//$pdf->Ln(10);
	
	//$pdf->SetWidths(array(65, 60, 55, 50, 20));
	//$pdf->SetFont('Arial','B',10);
	//$pdf->SetFillColor(85,107,47);
   // $pdf->SetTextColor(255);

		//for($i=0;$i<1;$i++)
		//	{
		//		$pdf->Row(array('FECHA', 'MEDICO', 'CONSULTORIO', 'DIAGNOSTICO'));
		//	}
	//$historial = $con->conectar();	
	//$strConsulta = "SELECT consultas_medicas.fecha_consulta, consultas_medicas.consultorio, consultas_medicas.diagnostico, medicos.nombre_medico 
	//FROM consultas_medicas 
	//Inner Join pacientes ON consultas_medicas.id_paciente = pacientes.id_paciente 
	//Inner Join medicos ON consultas_medicas.id_medico = medicos.id_medico
	//WHERE pacientes.id_paciente = '$paciente'";
	



	//$historial = $con->conectar();	
//	$strConsulta = "SELECT consultas_medicas.fecha_consulta, consultas_medicas.consultorio, consultas_medicas.diagnostico, medicos.nombre_medico 
	//FROM consultas_medicas 
	//Inner Join pacientes ON consultas_medicas.id_paciente = pacientes.id_paciente 
//	Inner Join medicos ON consultas_medicas.id_medico = medicos.id_medico
	//WHERE pacientes.id_paciente = '$paciente'";
	
	//$historial = mysql_query($strConsulta);
	//$numfilas = mysql_num_rows($historial);
	
	//for ($i=0; $i<$numfilas; $i++)
	//	{
	//		$fila = mysql_fetch_array($historial);
	//		$pdf->SetFont('Arial','',10);
			
	//		if($i%2 == 1)
	//		{
	//			$pdf->SetFillColor(153,255,153);
    //			$pdf->SetTextColor(0);
	//			$pdf->Row(array($fila['fecha_consulta'], $fila['nombre_medico'], $fila['consultorio'], $fila['diagnostico']));
	//		}
	//		else
	//		{
	//			$pdf->SetFillColor(102,204,51);
    //			$pdf->SetTextColor(0);
	//			$pdf->Row(array($fila['fecha_consulta'], $fila['nombre_medico'], $fila['consultorio'], $fila['diagnostico']));
	//		}
	//	}

$pdf->Output();
?>