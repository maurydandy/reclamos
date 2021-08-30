<?php
	
	require 'funcs/conexion.php';
	//include 'funcs/funcs.php';

	//if(isset($_GET["id"]) && !empty($_GET["id"] = $id)){}
	//if(!empty($_GET["id"])){
	//$id = isset($_GET['id']) ? $_GET['id'] : '';
	//UPDATE `bines_baja` SET `id`=[value-1],`cupi`=[value-2],`serie`=[value-3],`detalle`=[value-4],`oficina`=[value-5],`fecha`=[value-6],`funciona`=[value-7],`falla`=[value-8],`retirado`=[value-9] WHERE 1
	$id = ''; 
if( isset( $_POST['id'])) {
    $id = $_POST['id']; 
} 

	$cupi = $_POST['cupi'];
	$serie = $_POST['serie'];
	
	// Textos completos	


	$detalle = $_POST['detalle'];
	$oficina = $_POST['oficina'];
	
	$fecha = $_POST['fecha'];
	$funciona = $_POST['funciona'];
	$falla = $_POST['falla'];

	$retirado = $_POST['retirado'];
	

	$sql1 = "UPDATE bines_baja SET cupi = '$cupi', serie = '$serie', detalle ='$detalle'
	, oficina ='$oficina', fecha ='$fecha', funciona = '$funciona'
	, falla = '$falla', retirado = '$retirado' WHERE id = '$id'";
	

	//fechat = '$fechat', horat = '$horat', cargo = '$cargo', persona = '$persona' 
	$resultado = $mysqli->query($sql1);
	//
	//`cuit`, `empresa`, `domicilio`, `domicilio2`, `nfantasia`, `rubro`, `expe`, `acta`, `fecha`, `hora`, `fechat`, `horat`, `cargo`,
	// `persona`, `dni`, `domicilio3`, `nacion`, `delega`, `sueldo1`, `sueldo2`, `recibo1`, `recibo2`, `art`, `cctn`, `ropa`, `apor1`, `apor2`, 
	//`gre1`, `gre2`, `chora1`, `chora2`, `franco1`, `franco2`, `seguro1`, `seguro2`, `emp`, `texto`
	//$sql1 = "UPDATE agenda SET cuit = '$cuit', empresa ='$empresa', domicilio ='$domicilio', domicilio2 = $domicilio2 WHERE id = '$id'";
	//$resultado = $mysqli->query($sql1);
	//echo $sql1;
	//public function update($idlanguage, $namelanguage, $isactive, $languageiso, $countrycode, $isbaselanguage, $issystemlanguage){        
    //$sqlUpdate = "UPDATE cb_language "
       //     . "     SET namelanguage    = '".$namelanguage."', "
         //   . "         isactive        = '".$isactive."', "
         //   . "         languageiso     = '".$languageiso."', "
         //   . "         countrycode     = '".$countrycode."', "
         //   . "         isbaselanguage  = '".$isbaselanguage."', "
          //  . "         issystemlanguage = '".$issystemlanguage."'"
          //  . "     WHERE   idlanguage  = '".$idlanguage."'"
//
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
					<?php if  ($resultado) { ?>
						<h3>REGISTRO MODIFICADO</h3>
						<?php } else { ?>
						<h3>ERROR AL MODIFICAR</h3>
					<?php } ?>
					
					<a href="../reclamos/bienes_baja.php" class="btn btn-primary">Regresar</a>
					
				</div>
			</div>
		</div>
	</body>
</html>
