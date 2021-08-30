


<html lang="es">
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<link href="css/bootstrap-theme.css" rel="stylesheet">
		<script src="js/jquery-3.1.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>	
	<link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"/>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
	</head>
	
	<body>
		<div class="container">
			<div class="row">
				<h3 style="text-align:center">NUEVO RECLAMO</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="guardar2.php" autocomplete="off">
				
				<div class="form-group">
					
					<label for="persona" class="col-sm-2 control-label">Persona:</label>
					<div class="col-sm-2">
						<input type="persona" class="form-control" id="persona" name="persona" placeholder="Solicitante">
					</div>
				</div>
				
				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Oficina:</label>
					<div class="col-sm-4">
						
						<select class="form-control" id="oficina" name="oficina">
							<option value=""></option>
							<option value="001  MESA DE ENTRADAS">001  MESA DE ENTRADAS</option>
							<option value="002  DESPACHO">002  DESPACHO</option>
							<option value="003 NOTIFICACIONES">003 NOTIFICACIONES</option>
							<option value="004 SERVICIO DOMÉSTICO">004 SERVICIO DOMÉSTICO</option>
							<option value="005 CONCILIACIONES">005 CONCILIACIONES</option>
							<option value="006 DENUNCIAS">006 DENUNCIAS</option>
							<option value="007 OCL">007 OCL</option>
							<option value="008 RIESGOS LABORALES">008 RIESGOS LABORALES</option>
							<option value="009 RUBRICACIÓN DE LIBROS">009 RUBRICACIÓN DE LIBROS</option>
							<option value="010 SUMARIOS">010 SUMARIOS</option>
							<option value="011 REGISTRO DE INFRACTORES">011 REGISTRO DE INFRACTORES</option>
							<option value="012 REG. DE CONT. VIÑAS Y FRUT.">012 REG. DE CONT. VIÑAS Y FRUT.</option>
							<option value="013 INSPECCIÓN Y VIGILANCIA">013 INSPECCIÓN Y VIGILANCIA</option>
							<option value="014 ASESORÍA LETRADA">014 ASESORÍA LETRADA</option>
							<option value="015 APREMIO">015 APREMIO</option>
							<option value="016 ARCHIVO">016 ARCHIVO</option>
							<option value="017 HABILITACIÓN">017 HABILITACIÓN</option>
							<option value="018 PERSONAL">018 PERSONAL</option>
							<option value="019 DIR. CONFLICTOS COLECTIVOS">019 DIR. CONFLICTOS COLECTIVOS</option>
							<option value="020 JEFE DE ASESORES">020 JEFE DE ASESORES</option>
							<option value="021 DCIÓN DE DELEGACIONES">021 DCIÓN DE DELEGACIONES</option>
							<option value="022  SUB-SECERTARIO DE TRABAJO">022  SUB-SECERTARIO DE TRABAJO</option>
							<option value="023  HIGIENE Y SEGURIDAD">023  HIGIENE Y SEGURIDAD</option>
							<option value="024 RED NACIONAL DE EMPLEO"> 024 RED NACIONAL DE EMPLEO</option>
							<option value="025 CENTRO DE COMPUTOS"> 025 CENTRO DE COMPUTOS</option>
							<option value="027 DELEGACION SAN MARTIN">027 DELEGACION SAN MARTIN</option>
							<option value="028 DELEGACION RIVADAVIA">028 DELEGACION RIVADAVIA</option>
							<option value="029 DELEGACION LA PAZ">029 DELEGACION LA PAZ </option>
							<option value="030 DELEGACION LUJAN">030 DELEGACION LUJAN</option>
							<option value="031 DELEGACION TUNUYAN">031 DELEGACION TUNUYAN</option>
							<option value="032 DELEGACION TUPUNGATO"> 032 DELEGACION TUPUNGATO</option>	
							<option value="033 DELEGACION SAN CARLOS">033 DELEGACION SAN CARLOS</option>
							<option value="034 DELEGACION SAN RAFAEL">034 DELEGACION SAN RAFAEL</option>
							<option value="035 DELEGACION GENERAL ALVEAR">035 DELEGACION GENERAL ALVEAR</option>
							<option value="036 DELEGACION MALARGUE"> 036 DELEGACION MALARGUE</option>
							<option value="048 MINISTERIO DE GOBIERNO"> 048 MINISTERIO DE GOBIERNO</option>
							
							<option value="095 ASESOR GREMIAL"> 095 ASESOR GREMIAL</option>
							<option value="130 DELEGACION SANTA ROSA">130 DELEGACION SANTA ROSA</option>
							<option value="275 DELEGACION LAVALLE">275 DELEGACION LAVALLE</option>
							<option value="299 ESTADÍSTICAS SSTSS"> 299 ESTADÍSTICAS SSTSS</option>
							<option value="355 CO.PRE.T.I."> 355 CO.PRE.T.I.</option>
							<option value="363 DELEGACIÓN SANTA ROSA"> 363 DELEGACIÓN SANTA ROSA</option>

							<option value="371 DIRECCIÓN DE INSPECCIÓN"> 371 DIRECCIÓN DE INSPECCIÓN</option>
							<option value="387 PRENSA Y DISEÑO SSTSS"> 374 HAB. LIBRO DE HIGIENE</option>
							<option value="389 CONFLICTOS COLECTIVOS"> 389 CONFLICTOS COLECTIVOS</option>
							<option value="392 MOVILIDAD"> 392 MOVILIDAD</option>
							<option value="393 VIOLENCIA Y TRATA LABORAL"> 393 VIOLENCIA Y TRATA LABORAL</option>
							<option value="399 DIRECCIÓN DE ADMINISTRACIÓN"> 399 DIRECCIÓN DE ADMINISTRACIÓN</option>
							<option value="407 RECURSOS HUMANOS"> 407 RECURSOS HUMANOS</option>

						</select>
					</div>
				</div>	

					
				
				
				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Fecha:</label>
					<div class="col-sm-2">
						<script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker").datepicker({
firstDay: 1
});
});
</script> 
<script> 
$(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});
</script> 
						<input type="fecha" class="form-control" id="datepicker" name="fecha" placeholder="Fecha" >
					</div>
				</div>
				
		<div class="form-group">
			<label for="hora" class="col-sm-2 control-label">Hora :</label>
				<div class="col-sm-1">
					<input type="text" class="form-control" id="hora" name="hora" placeholder="Hora" >
				</div>
		</div>
				
				

		<p>
		<div class="form">
			<label for="detalle" class="col-sm-2 control-label">Falla/Reclamo:</label>
				<textarea name="detalle" rows="10" cols="40" id="detalle"></textarea>					
		</div>
		</p>

		<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Atendido por:</label>
					<div class="col-sm-3">
						
						<select class="form-control" id="personal" name="personal" >
							<option value=""></option>
							<option value="Mauricio Albornoz">Mauricio Albornoz</option>
							<option value="Jose Luis Gonzalez">Jose Luis Gonzalez</option>
							<option value="Dante Brondo">Dante Brondo</option>
							<option value="Diego Videla">Diego Videla</option>
							<option value="Cristian Mattei">Cristian Mattei</option>
							
						</select>
					</div>
		</div>	

				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Fecha Terminado:</label>
					<div class="col-sm-2">
						<script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker1").datepicker({
firstDay: 1
});
});
</script> 
<script> 
$(function($){
    $.datepicker.regional['es'] = {
        closeText: 'Cerrar',
        prevText: '<Ant',
        nextText: 'Sig>',
        currentText: 'Hoy',
        monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
        monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
        dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
        dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
        dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
        weekHeader: 'Sm',
        dateFormat: 'dd/mm/yy',
        firstDay: 1,
        isRTL: false,
        showMonthAfterYear: false,
        yearSuffix: ''
    };
    $.datepicker.setDefaults($.datepicker.regional['es']);
});
</script> 
		<input type="fechat" class="form-control" id="datepicker1" name="fechat" placeholder="Fecha Turno" >
					</div>
				</div>


			<div class="form-group">
					<label for="horat" class="col-sm-2 control-label">Hora Terminado :</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="horat" name="horat" placeholder="Hora" >
					</div>
				</div>

				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Finalizado:</label>
					<div class="col-sm-2">
						
						<select class="form-control" id="terminado" name="terminado">
							<option value=""></option>
							<option value="SI">Si</option>
							<option value="NO">NO</option>
							<option value="Pendiente">Pendiente</option>
							
						</select>
					
					
						</div>
						</div>

									<a href="index.php" class="btn btn-default">Regresar</a>
				

									<button type="submit" class="btn btn-primary">Guardar</button>



					</div>
				</div>
			</form>
		</div>
	</body>
	© 2016 Mauricio Albornoz. Todos los derechos reservados.
</html>