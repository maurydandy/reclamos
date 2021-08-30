<?php
	
	require 'funcs/conexion.php';
	
	

	$id = $_POST['id'];
	
	$cuit = $_POST['cuit'];
	$empresa = $_POST['empresa'];
	//$nfantasia = $_POST['nfantasia'];
	//$domicilio = $_POST['domicilio'];
	//$domicilio2 = $_POST['domicilio2'];
	//$rubro = $_POST['rubro'];
	$expe = $_POST['expe'];
	$acta = $_POST['acta'];

	$fecha = $_POST['fecha'];
	$hora = $_POST['hora'];	
	//$persona = $_POST['persona'];
	//$cargo = $_POST['cargo'];
	//$dni = $_POST['dni'];
	//$nacion = $_POST['nacion'];
	//$domicilio3 = $_POST['domicilio3'];

	//$fechat = $_POST['fechat'];
	//$horat = $_POST['horat'];
	//$delega = $_POST['delega'];

	$sql1 = "UPDATE agenda SET cuit='$cuit', empresa='$empresa', acta='$acta' , fecha = '$fecha' , hora = '$hora' WHERE id = '$id' ";
	$resultado = $mysqli->query($sql1);
	
	//$sql1 = "UPDATE agenda SET  cuit= '$cuit',empresa='$empresa',domicilio='$domicilio', domicilio2 ='$domicilio2', 'nfantasia'='$nfantasia',rubro= '$rubro', expe ='$expe', acta= '$acta', fecha = '$fecha', hora ='$hora', fechat= '$fecha', horat ='$horat', cargo ='$cargo', persona = '$persona', dni='$dni', domicilio3 = '$domicilio3', nacion ='$nacion', delega='$delega' WHERE id = '$id' ";
	
	//$sql1 = "UPDATE agenda SET cuit ='$cuit', rubro = '$rubro', persona = '$persona', cargo= '$cargo', dni = '$dni', nacion = '$nacion', domicilio3 ='$domicilio3', fechat = '$fechat', horat = '$horat', delega = '$delega', domicilio2 = '$domicilio2', domicilio ='$domicilio', nfantasia='$nfantasia', empresa ='$empresa', expe = '$expe', acta ='$acta' , fecha = '$fecha' , hora = '$hora' WHERE id = '$id' ";
	//$resultado = $mysqli->query($sql1);
	
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
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="index.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
© 2016 Mauricio Albornoz. Todos los derechos reservados.
</html>
