<?php
	session_start();
	require 'funcs/conexion.php';
	include 'funcs/funcs.php';
	
	if(!isset($_SESSION["id_usuario"])){ //Si no ha iniciado sesión redirecciona a index.php
		header("Location: index.php");
	}
	
	$idUsuario = $_SESSION['id_usuario'];
	
	
	
	$sql = "SELECT id, nombre, usuario FROM usuarios WHERE id = '$idUsuario'";
	$result = $mysqli->query($sql);
	
	$row = $result->fetch_assoc();

	$where = "";
	
	if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE nombre LIKE '%$valor'";
		}
	}

?>
 

<html>
	<head>
		<title>Welcome</title>
		<link rel="stylesheet" href="css/bootstrap.min.css" >
		<link rel="stylesheet" href="css/bootstrap-theme.min.css" >
		<script src="js/bootstrap.min.js" ></script>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<link href="css/jquery.dataTables.min.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
		<script src="js/jquery.dataTables.min.js"></script>
		<style>
			body {
			padding-top: 20px;
			padding-bottom: 20px;
			}
		</style>
	<script>
			$(document).ready(function(){
				$('#mitabla').DataTable({
					"order": [[1, "asc"]],
					"language":{
					"lengthMenu": "Mostrar _MENU_ registros por pagina",
					"info": "Mostrando pagina _PAGE_ de _PAGES_",
						"infoEmpty": "No hay registros disponibles",
						"infoFiltered": "(filtrada de _MAX_ registros)",
						"loadingRecords": "Cargando...",
						"processing":     "Procesando...",
						"search": "Buscar:",
						"zeroRecords":    "No se encontraron registros coincidentes",
						"paginate": {
							"next":       "Siguiente",
							"previous":   "Anterior"
						},					
					},
					"bProcessing": true,
					"bServerSide": true,
					"sAjaxSource": "server_process.php"
				});	
			});
			
		</script>
	</head>
	
	<body>
		<div class="container">
			
			<nav class='navbar navbar-default'>
				<div class='container-fluid'>
					<div class='navbar-header'>
						<button type='button' class='navbar-toggle collapsed' data-toggle='collapse' data-target='#navbar' aria-expanded='false' aria-controls='navbar'>
							<span class='sr-only'>Men&uacute;</span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
							<span class='icon-bar'></span>
						</button>
					</div>
					
					<div id='navbar' class='navbar-collapse collapse'>
						<ul class='nav navbar-nav'>
							<li class='active'><a href='welcome.php'>Inicio</a></li>			
							<li class='active'><a href='bienes_baja.php'>Bienes de baja</a></li>
						</ul>
						
						<?php if($_SESSION['tipo_usuario']==1) { ?>
							<ul class='nav navbar-nav'>
								<li><a href='#'>Administrar Usuarios</a></li>
							</ul>
						<?php } ?>
						
						<ul class='nav navbar-nav navbar-right'>
					<span class="glyphicon glyphicon-user"></span><?php echo $row['usuario']; ?>
						<ul class='nav navbar-nav navbar-right'>			
										<li><a href='logout.php'>Cerrar Sesi&oacute;n</a></li>
							
	
						</ul>
					</div>
				</div>
			</nav>	
			
			
				
				<br />
			</div>
		</div>
	<div class="container">
			<div class="row">
				<h2 style="text-align:center"> Soluciones Informaticas</h2>
			</div>
			
			<div class="row">
				<a href="../login/vistas/index.php" class="btn btn-primary">Listado por Fecha</a>
				<a href="nuevo2.php" class="btn btn-primary">Nuevo</a>
			</div>
			
			<br>
			
			
			<div class="row table-responsive">
				<table class="display" id="mitabla">
					<thead>
						<tr>
							<th>ID</th>
							<th>Persona</th>
							<th>Oficina</th>
							<th>Fecha</th>
							<th>Hora</th>
							<th>Detalle</th>
							<th>Fechat</th>
							<th>Horat</th>
							<th>Terminado</th>
							<th>Personal</th>
							<th></th>
							<th></th>
							<th></th>
							
						</tr>
					</thead>
					
				<tbody>
						
							<tr>
							
							<td><a href="reparacion.php"><span class="glyphicon glyphicon-pencil"></span></a></td>
							<td><a href="modificar2.php"><span class="glyphicon glyphicon-pencil"></span></a></td>

						
					</tbody>
				</table>
			</div>
		</div>
		
		<!-- Modal -->
		<div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			<div class="modal-dialog">
				<div class="modal-content">
					
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					</div>
					
					<div class="modal-body">
						¿Desea eliminar este registro?
					</div>
					
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
						<a class="btn btn-danger btn-ok">Eliminar</a>
					</div>
				</div>
			</div>
		</div>
		
		<script>
			$('#confirm-delete').on('show.bs.modal', function(e) {
				$(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
				
				$('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
			});
		</script>	
		
		
	</body>
		

	</head>
	


© 2019 Mauricio Albornoz. Todos los derechos reservados.
</html>		