<?php
	//error_reporting(E_ALL ^ E_NOTICE);
	require 'funcs/conexion.php';
	
//$mysqli=new mysqli("localhost","root","computos","login"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
//	if(mysqli_connect_errno()){
		//echo 'Conexion Fallida : ', mysqli_connect_error();

	//echo "coneccion exitosa";
	//	exit();
	//}


	$persona = $_POST['persona'];
	$oficina = $_POST['oficina'];
	
	// Textos completos	


	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];
	
	$detalle = $_POST['detalle'];
	$fechat = $_POST['fechat'];
	$horat = $_POST['horat'];

	$terminado = $_POST['terminado'];
	$personal = $_POST['personal'];	

	//$nacion = $_POST['nacion'];
	//$domicilio3 = $_POST['domicilio3'];

	//$fechat = $_POST['fechat'];
	//$horat = $_POST['horat'];
	//$delega = $_POST['delega'];

	//$sueldo1= $_POST['sueldo1'];	
	//$sueldo2= $_POST['sueldo2'];
	//$sueldo3=$_POST['sueldo3'];
	//$sueldo4=$_POST['sueldo4'];
	
	//$recibo1= $_POST['recibo1'];
	//$recibo2= $_POST['recibo2'];
	//$recibo3=$_POST['recibo3'];
	//$recibo4=$_POST['recibo4'];
	
	//$art= $_POST['art'];
	//$cctn= $_POST['cctn'];
	//$ropa= $_POST['ropa'];
	
	//$apor1= $_POST['apor1'];
	//$apor2= $_POST['apor2'];
	//$aporte3=$_POST['aporte3'];
	//$aporte4=$_POST['aporte4'];



	//$gre1= $_POST['gre1'];
	//$gre2= $_POST['gre2'];
	//$gremial3=$_POST['gremial3'];
	//gremial4=$_POST['gremial4'];


	//$chora1 = $_POST['chora1'];
	//$chora2= $_POST['chora2'];
	//$chora3=$_POST['chora3'];
	//$chora4=$_POST['chora4'];


	//$franco1= $_POST['franco1'];
	//$franco2= $_POST['franco2'];
	//$franco3=$_POST['franco3'];
	//$franco4=$_POST['franco4'];

	//$seguro1= $_POST['seguro1'];
	//$seguro2= $_POST['seguro2'];
	//$seguro3=$_POST['seguro3'];
	//$seguro4=$_POST['seguro4'];

	//$emp= $_POST['emp'];
	//$emp2=$_POST['emp2'];
	//$emp3=$_POST['emp3'];
	//$emp4=$_POST['emp4'];
	
	//$texto = $_POST['texto'];
	//$art=$_POST['art'];
	//$art=$_POST['art'];

	
	//$sql1 = "INSERT INTO agenda (cuit, empresa, domicilio, domicilio2, nfantasia, rubro, expe, acta, fecha, hora, fechat, horat, cargo, persona, dni, domicilio3, nacion, delega, sueldo1, sueldo2, recibo1, recibo2, art, cctn, ropa, apor1, apor2, gre1, gre2, chora1, chora2, franco1, franco2, seguro1, seguro2, emp, texto) 
	//VALUES ('". $cuit ."','". $empresa ."', '". $domicilio ."', '".$domicilio2."', '". $nfantasia ."', '".$rubro."', '". $expe ."', 
	//'". $acta ."', '" . $fecha ."', '". $hora ."', '". $fechat ."', '". $horat ."', '". $cargo ."', '". $persona ."', '" . $dni ."', '". $domicilio3 ."', 
	//'". $nacion ."', '". $delega ."', '". $sueldo1 ."', '". $sueldo2 ."', '". $recibo1 ."', '". $recibo2 ."','". $art ."','". $cctn ."','". $ropa ."','". $apor1 ."','". $apor2 ."','". $gre1 ."','". $gre2 ."','". $chora1 ."','". $chora2 ."','". $franco1 ."','". $franco2 ."','". $seguro1 ."','". $seguro2 ."','". $emp ."','". $texto ."')";
	//echo mysql_error();
	//$resultado = $mysqli->query($sql1);




//VALUES('" . $nombre . "', '" . $apellido . "', '" . $sexo . "', '" . $tel . "', '" . $email . "', '" . $cedula . "', '" . $dir . "', '" . $sangre . "')");

	
	$sql1 = "INSERT INTO trabajo ( persona, oficina, fecha, hora, detalle, fechat, horat, terminado, personal) 
	VALUES ('". $persona ."','". $oficina ."', '". $fecha ."', '".$hora."', '". $detalle ."', '".$fechat."', '". $horat ."', 
	'". $terminado ."', '" . $personal ."')";
	echo mysql_error();
	$resultado = $mysqli->query($sql1);

	//'". $recibo1 ."', '".$recibo2 ."', '". $art ."', '". $cctn ."', '". $ropa ."', '". $apor1 ."', '". $apor2 ."')
?>

<html lang="es">
	<head>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<div class="row" style="text-align:center">
					<?php if($resultado) { ?>
						<h3>REGISTRO GUARDADO</h3>
						<?php } else { ?>
						<h3>ERROR AL GUARDAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
