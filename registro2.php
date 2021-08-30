
<?php
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
 
	//$id = $mysqli->real_escape_string($_GET['id']);
//$token = $mysqli->real_escape_string($_POST['token']);


	$id = ''; 
if( isset( $_POST['id'])) {
    $id = $_POST['id']; 
} 
 
	$sql= "SELECT * FROM usuarios WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
?>
<html>
	<head>
		<title>Cambiar Password</title>
		
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		
		
	</head>
	
	<body>
		<div class="container">
			<div id="signupbox" style="margin-top:50px" class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
				<div class="panel panel-info">
					<div class="panel-heading">
						<div class="panel-title">Cambiar Password</div>
						<input type="hidden" id="id" name="id" value="<?php echo $row['id']; ?>" /
						<div style="float:right; font-size: 85%; position: relative; top:-10px"><a id="signinlink" href="index.php">Iniciar Sesi&oacute;n</a></div>
					</div>  
					
					<div class="panel-body" >
						 

						<form id="signupform" class="form-horizontal" role="form" action="cambiopass2.php" method="POST" autocomplete="off">
							
							<div id="signupalert" style="display:none" class="alert alert-danger">
								<p>Error:</p>
								<span></span>
							</div>
							
							
							
							<div class="form-group">
								<label for="usuario" class="col-md-3 control-label">Usuario</label>
								<div class="col-md-9">
									<input type="text" class="form-control" name="usuario" placeholder="Usuario" value="<?php echo $row['usuario']; ?>" required>
								</div>
							</div>
							
							<div class="form-group">
								<label for="password" class="col-md-3 control-label">Password</label>
								<div class="col-md-9">
									<input type="password" class="form-control" name="password" placeholder="Password" value="<?php echo $row['password']; ?>" required>
								</div>
							</div>
							
						
							
							
							<div class="form-group">
								
								
							</div>
							
							<div class="form-group">                                      
								<div class="col-md-offset-3 col-md-9">
									<button id="btn-signup" type="submit" class="btn btn-info"><i class="icon-hand-right"></i>Confirmar</button> 
								</div>
							</div>
						</form>
						
					</div>
				</div>
			</div>
		</div>
	</body>
</html>															