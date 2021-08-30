<?php
	require 'funcs/conexion.php';
	
	$id = $_GET['id'];
	
	$sql= "SELECT * FROM agenda WHERE id = '$id'";
	$resultado = $mysqli->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	
?>


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
				<h3 style="text-align:center">NUEVA ACTA DE INSPECCION</h3>
			</div>
			
			<form class="form-horizontal" method="POST" action="update2.php" autocomplete="off">
				<div class="form-group">
					<label for="cuit" class="col-sm-2 control-label">Cuit:</label>
					<div class="col-sm-2">
						<input type="cuit" class="form-control" id="cuit" name="cuit" placeholder="Cuit" value="<?php echo $row['cuit']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="empresa" class="col-sm-2 control-label">Empresa:</label>
					<div class="col-sm-3">
						<input type="empresa" class="form-control" id="empresa" name="empresa" placeholder="Empresa" value="<?php echo $row['empresa']; ?>">
					</div>
				</div>



				<div class="form-group">
					<label for="domicilio" class="col-sm-2 control-label">Domicilio:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="domicilio" name="domicilio" placeholder="Domicilio" >
					</div>
				</div>
				<div class="form-group">
					<label for="nfantasia" class="col-sm-2 control-label">Nombre Comercial:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="nfantasia" name="nfantasia" placeholder="Nombre Comercial" value="<?php echo $row['nfantasia']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="domicilio2" class="col-sm-2 control-label">Domicilio Comercial:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="domicilio" name="domicilio2" placeholder="Domicilio Comercial" value="<?php echo $row['domicilio2']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="rubro" class="col-sm-2 control-label">Rubro:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="rubro" name="rubro" placeholder="Rubro" value="<?php echo $row['rubro']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="expe" class="col-sm-2 control-label">Expediente:</label>
					<div class="col-sm-2">
						<input type="text" class="form-control" id="expe" name="expe" placeholder="N° Expediente" value="<?php echo $row['expe']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="" class="col-sm-2 control-label">Acta:</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="acta" name="acta" placeholder="Acta" value="<?php echo $row['acta']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Dia de inspeccion:</label>
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
						<input type="fecha" class="form-control" id="datepicker" name="fecha" placeholder="Fecha" value="<?php echo $row['fecha']; ?>">
					</div>
				</div>
				
				<div class="form-group">
					<label for="hora" class="col-sm-2 control-label">Hora de inspeccion:</label>
					<div class="col-sm-1">
						<input type="text" class="form-control" id="hora" name="hora" placeholder="horario" value="<?php echo $row['hora']; ?>">
					</div>
				</div>
				




				<div class="form-group">
					<label for="persona" class="col-sm-2 control-label">Atendido por:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="persona" name="persona" placeholder="Atendido por.." value="<?php echo $row['persona']; ?>">
					</div>
				</div>


				<div class="form-group">
					<label for="cargo" class="col-sm-2 control-label">Cargo:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="cargo" name="cargo" placeholder="Cargo" value="<?php echo $row['cargo']; ?>">
					</div>
				</div>

				<div class="form-group">
					<label for="dni" class="col-sm-2 control-label">DNI:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="dni" name="dni" placeholder="DNI" value="<?php echo $row['dni']; ?>">
					</div>
				</div>	

				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Nacionalidad:</label>
					<div class="col-sm-3">
					<select class="form-control" id="nacion" name="nacion">	
				<option value="Seleccione... "> Seleccione...</option>			
<option value="Afganistán ">Afganistán </option>
<option value="Akrotiri ">Akrotiri </option>
<option value="Albania ">Albania </option>
<option value="Alemania ">Alemania </option>
<option value="Andorra ">Andorra </option>
<option value="Angola ">Angola </option>
<option value="Anguila ">Anguila </option>
<option value="Antártida ">Antártida </option>
<option value="Antigua y Barbuda ">Antigua y Barbuda </option>
<option value="Antillas Neerlandesas ">Antillas Neerlandesas </option>
<option value="Arabia Saudí ">Arabia Saudí </option>
<option value="Arctic Ocean ">Arctic Ocean </option>
<option value="Argelia ">Argelia </option>
<option value="Argentina ">Argentina </option>
<option value="Armenia ">Armenia </option>
<option value="Aruba ">Aruba </option>
<option value="Ashmore andCartier Islands ">Ashmore andCartier Islands </option>
<option value="Atlantic Ocean ">Atlantic Ocean </option>
<option value="Australia ">Australia </option>
<option value="Austria ">Austria </option>
<option value="Azerbaiyán ">Azerbaiyán </option>
<option value="Bahamas ">Bahamas </option>
<option value="Bahráin ">Bahráin </option>
<option value="Bangladesh ">Bangladesh </option>
<option value="Barbados ">Barbados </option>
<option value="Bélgica ">Bélgica </option>
<option value="Belice ">Belice </option>
<option value="Benín ">Benín </option>
<option value="Bermudas ">Bermudas </option>
<option value="Bielorrusia ">Bielorrusia </option>
<option value="Birmania Myanmar ">Birmania Myanmar </option>
<option value="Bolivia ">Bolivia </option>
<option value="Bosnia y Hercegovina ">Bosnia y Hercegovina </option>
<option value="Botsuana ">Botsuana </option>
<option value="Brasil ">Brasil </option>
<option value="Brunéi ">Brunéi </option>
<option value="Bulgaria ">Bulgaria </option>
<option value="Burkina Faso ">Burkina Faso </option>
<option value="Burundi ">Burundi </option>
<option value="Bután ">Bután </option>
<option value="Cabo Verde ">Cabo Verde </option>
<option value="Camboya ">Camboya </option>
<option value="Camerún ">Camerún </option>
<option value="Canadá ">Canadá </option>
<option value="Chad ">Chad </option>
<option value="Chile ">Chile </option>
<option value="China ">China </option>
<option value="Chipre ">Chipre </option>
<option value="Clipperton Island ">Clipperton Island </option>
<option value="Colombia ">Colombia </option>
<option value="Comoras ">Comoras </option>
<option value="Congo ">Congo </option>
<option value="Coral Sea Islands ">Coral Sea Islands </option>
<option value="Corea del Norte ">Corea del Norte </option>
<option value="Corea del Sur ">Corea del Sur </option>
<option value="Costa de Marfil ">Costa de Marfil </option>
<option value="Costa Rica ">Costa Rica </option>
<option value="Croacia ">Croacia </option>
<option value="Cuba ">Cuba </option>
<option value="Dhekelia ">Dhekelia </option>
<option value="Dinamarca ">Dinamarca </option>
<option value="Dominica ">Dominica </option>
<option value="Ecuador ">Ecuador </option>
<option value="Egipto ">Egipto </option>
<option value="El Salvador ">El Salvador </option>
<option value="El Vaticano ">El Vaticano </option>
<option value="Emiratos Árabes Unidos ">Emiratos Árabes Unidos </option>
<option value="Eritrea ">Eritrea </option>
<option value="Eslovaquia ">Eslovaquia </option>
<option value="Eslovenia ">Eslovenia </option>
<option value="España ">España </option>
<option value="Estados Unidos ">Estados Unidos </option>
<option value="Estonia ">Estonia </option>
<option value="Etiopía ">Etiopía </option>
<option value="Filipinas ">Filipinas </option>
<option value="Finlandia ">Finlandia </option>
<option value="Fiyi ">Fiyi </option>
<option value="Francia ">Francia </option>
<option value="Gabón ">Gabón </option>
<option value="Gambia ">Gambia </option>
<option value="Gaza Strip ">Gaza Strip </option>
<option value="Georgia ">Georgia </option>
<option value="Ghana ">Ghana </option>
<option value="Gibraltar ">Gibraltar </option>
<option value="Granada ">Granada </option>
<option value="Grecia ">Grecia </option>
<option value="Groenlandia ">Groenlandia </option>
<option value="Guam ">Guam </option>
<option value="Guatemala ">Guatemala </option>
<option value="Guernsey ">Guernsey </option>
<option value="Guinea ">Guinea </option>
<option value="Guinea Ecuatorial ">Guinea Ecuatorial </option>
<option value="Guinea-Bissau ">Guinea-Bissau </option>
<option value="Guyana ">Guyana </option>
<option value="Haití ">Haití </option>
<option value="Honduras ">Honduras </option>
<option value="Hong Kong ">Hong Kong </option>
<option value="Hungría ">Hungría </option>
<option value="India ">India </option>
<option value="Indian Ocean ">Indian Ocean </option>
<option value="Indonesia ">Indonesia </option>
<option value="Irán ">Irán </option>
<option value="Iraq ">Iraq </option>
<option value="Irlanda ">Irlanda </option>
<option value="Isla Bouvet ">Isla Bouvet </option>
<option value="Isla Christmas ">Isla Christmas </option>
<option value="Isla Norfolk ">Isla Norfolk </option>
<option value="Islandia ">Islandia </option>
<option value="Islas Caimán ">Islas Caimán </option>
<option value="Islas Cocos ">Islas Cocos </option>
<option value="Islas Cook ">Islas Cook </option>
<option value="Islas Feroe ">Islas Feroe </option>
<option value="Islas Georgia del Sur y Sandwich del Sur ">Islas Georgia del Sur y Sandwich del Sur </option>
<option value="Islas Heard y McDonald ">Islas Heard y McDonald </option>
<option value="Islas Malvinas ">Islas Malvinas </option>
<option value="Islas Marianas del Norte ">Islas Marianas del Norte </option>
<option value="IslasMarshall ">IslasMarshall </option>
<option value="Islas Pitcairn ">Islas Pitcairn </option>
<option value="Islas Salomón ">Islas Salomón </option>
<option value="Islas Turcas y Caicos ">Islas Turcas y Caicos </option>
<option value="Islas Vírgenes Americanas ">Islas Vírgenes Americanas </option>
<option value="Islas Vírgenes Británicas ">Islas Vírgenes Británicas </option>
<option value="Israel ">Israel </option>
<option value="Italia ">Italia </option>
<option value="Jamaica ">Jamaica </option>
<option value="Jan Mayen ">Jan Mayen </option>
<option value="Japón ">Japón </option>
<option value="Jersey ">Jersey </option>
<option value="Jordania ">Jordania </option>
<option value="Kazajistán ">Kazajistán </option>
<option value="Kenia ">Kenia </option>
<option value="Kirguizistán ">Kirguizistán </option>
<option value="Kiribati ">Kiribati </option>
<option value="Kuwait ">Kuwait </option>
<option value="Laos ">Laos </option>
<option value="Lesoto ">Lesoto </option>
<option value="Letonia ">Letonia </option>
<option value="Líbano ">Líbano </option>
<option value="Liberia ">Liberia </option>
<option value="Libia ">Libia </option>
<option value="Liechtenstein ">Liechtenstein </option>
<option value="Lituania ">Lituania </option>
<option value="Luxemburgo ">Luxemburgo </option>
<option value="Macao ">Macao </option>
<option value="Macedonia ">Macedonia </option>
<option value="Madagascar ">Madagascar </option>
<option value="Malasia ">Malasia </option>
<option value="Malaui ">Malaui </option>
<option value="Maldivas ">Maldivas </option>
<option value="Malí ">Malí </option>
<option value="Malta ">Malta </option>
<option value="Man, Isle of ">Man, Isle of </option>
<option value="Marruecos ">Marruecos </option>
<option value="Mauricio ">Mauricio </option>
<option value="Mauritania ">Mauritania </option>
<option value="Mayotte ">Mayotte </option>
<option value="México ">México </option>
<option value="Micronesia ">Micronesia </option>
<option value="Moldavia ">Moldavia </option>
<option value="Mónaco ">Mónaco </option>
<option value="Mongolia ">Mongolia </option>
<option value="Montserrat ">Montserrat </option>
<option value="Mozambique ">Mozambique </option>
<option value="Namibia ">Namibia </option>
<option value="Nauru ">Nauru </option>
<option value="Navassa Island ">Navassa Island </option>
<option value="Nepal ">Nepal </option>
<option value="Nicaragua ">Nicaragua </option>
<option value="Níger ">Níger </option>
<option value="Nigeria ">Nigeria </option>
<option value="Niue ">Niue </option>
<option value="Noruega ">Noruega </option>
<option value="Nueva Caledonia ">Nueva Caledonia </option>
<option value="Nueva Zelanda ">Nueva Zelanda </option>
<option value="Omán ">Omán </option>
<option value="Pacific Ocean ">Pacific Ocean </option>
<option value="Países Bajos ">Países Bajos </option>
<option value="Pakistán ">Pakistán </option>
<option value="Palaos ">Palaos </option>
<option value="Panamá ">Panamá </option>
<option value="Papúa-Nueva Guinea ">Papúa-Nueva Guinea </option>
<option value="Paracel Islands ">Paracel Islands </option>
<option value="Paraguay ">Paraguay </option>
<option value="Perú ">Perú </option>
<option value="Polinesia Francesa ">Polinesia Francesa </option>
<option value="Polonia ">Polonia </option>
<option value="Portugal ">Portugal </option>
<option value="Puerto Rico ">Puerto Rico </option>
<option value="Qatar ">Qatar </option>
<option value="Reino Unido ">Reino Unido </option>
<option value="República Centroafricana ">República Centroafricana </option>
<option value="República Checa ">República Checa </option>
<option value="República Democrática del Congo ">República Democrática del Congo </option>
<option value="República Dominicana ">República Dominicana </option>
<option value="Ruanda ">Ruanda </option>
<option value="Rumania ">Rumania </option>
<option value="Rusia ">Rusia </option>
<option value="Sáhara Occidental ">Sáhara Occidental </option>
<option value="Samoa ">Samoa </option>
<option value="Samoa Americana ">Samoa Americana </option>
<option value="San Cristóbal y Nieves ">San Cristóbal y Nieves </option>
<option value="San Marino ">San Marino </option>
<option value="San Pedro y Miquelón ">San Pedro y Miquelón </option>
<option value="San Vicente y las Granadinas ">San Vicente y las Granadinas </option>
<option value="Santa Helena ">Santa Helena </option>
<option value="Santa Lucía ">Santa Lucía </option>
<option value="Santo Tomé y Príncipe ">Santo Tomé y Príncipe </option>
<option value="Senegal ">Senegal </option>
<option value="Seychelles ">Seychelles </option>
<option value="Sierra Leona ">Sierra Leona </option>
<option value="Singapur ">Singapur </option>
<option value="Siria ">Siria </option>
<option value="Somalia ">Somalia </option>
<option value="Southern Ocean ">Southern Ocean </option>
<option value="Spratly Islands ">Spratly Islands </option>
<option value="Sri Lanka ">Sri Lanka </option>
<option value="Suazilandia ">Suazilandia </option>
<option value="Sudáfrica ">Sudáfrica </option>
<option value="Sudán ">Sudán </option>
<option value="Suecia ">Suecia </option>
<option value="Suiza ">Suiza </option>
<option value="Surinam ">Surinam </option>
<option value="Svalbard y Jan Mayen ">Svalbard y Jan Mayen </option>
<option value="Tailandia ">Tailandia </option>
<option value="Taiwán ">Taiwán </option>
<option value="Tanzania ">Tanzania </option>
<option value="Tayikistán ">Tayikistán </option>
<option value="TerritorioBritánicodel Océano Indico ">TerritorioBritánicodel Océano Indico </option>
<option value="Territorios Australes Franceses ">Territorios Australes Franceses </option>
<option value="Timor Oriental ">Timor Oriental </option>
<option value="Togo ">Togo </option>
<option value="Tokelau ">Tokelau </option>
<option value="Tonga ">Tonga </option>
<option value="Trinidad y Tobago ">Trinidad y Tobago </option>
<option value="Túnez ">Túnez </option>
<option value="Turkmenistán ">Turkmenistán </option>
<option value="Turquía ">Turquía </option>
<option value="Tuvalu ">Tuvalu </option>
<option value="Ucrania ">Ucrania </option>
<option value="Uganda ">Uganda </option>
<option value="Unión Europea ">Unión Europea </option>
<option value="Uruguay ">Uruguay </option>
<option value="Uzbekistán ">Uzbekistán </option>
<option value="Vanuatu ">Vanuatu </option>
<option value="Venezuela ">Venezuela </option>
<option value="Vietnam ">Vietnam </option>
<option value="Wake Island ">Wake Island </option>
<option value="Wallis y Futuna ">Wallis y Futuna </option>
<option value="West Bank ">West Bank </option>
<option value="World ">World </option>
<option value="Yemen ">Yemen </option>
<option value="Yibuti ">Yibuti </option>
<option value="Zambia ">Zambia </option>
<option value="Zimbabue ">Zimbabue </option>
			
					</select>
					</div>
				</div>	

				<div class="form-group">
					<label for="domicilio3" class="col-sm-2 control-label">Direccion:</label>
					<div class="col-sm-5">
						<input type="text" class="form-control" id="domicilio3" name="domicilio3" placeholder="Direccion" value="<?php echo $row['domicilio3']; ?>">
					</div>
				</div>						
				
							<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Fecha Turno:</label>
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
						<input type="fechat" class="form-control" id="datepicker1" name="fechat" placeholder="Fecha Turno" value="<?php echo $row['fechat']; ?>">
					</div>
				</div>
				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Turno:</label>
					<div class="col-sm-2">
						<select class="form-control" id="horat" name="horat" value="<?php echo $row['horat']; ?>">
							<option value="08:00">08:00</option>
							<option value="08:30">08:30</option>
							<option value="09:00">09:00</option>

							<option value="09:30">09:30</option>
							<option value="10:00">10:00</option>
							<option value="10:30">10:30</option>
							<option value="11:00">11:00</option>
							<option value="11:30">11:30</option>
							<option value="12:00">12:00</option>
							<option value="12:30">12:30</option>
							<option value="13:00">13:00</option>
							
						</select>
					</div>
				</div>
				<div class="form-group">
					<label for="text" class="col-sm-2 control-label">Delegacion:</label>
					<div class="col-sm-3">
						
						<select class="form-control" id="delega" name="delega" value="<?php echo $row['delega']; ?>">
							<option value="Sede Central">Delegacion Sede Central</option>
							<option value="Delegacion San Martin">Delegacion San Martin</option>
							<option value="Delegacion Rivadavia">Delegacion Rivadavia</option>
							<option value="Delegacion San Rafael">Delegacion San Rafael</option>
							<option value="Delegacion San Carlos">Delegacion San Carlos</option>
							<option value="Delegacion Santa Rosa">Delegacion Santa Rosa</option>
							<option value="Delegacion Lavalle">Delegacion Lavalle</option>
							<option value="Delegacion Tunuyan">Delegacion Tunuyan</option>
							<option value="Delegacion Tupungato">Delegacion Tupungato</option>
							<option value="Delegacion Malargue">Delegacion Malargue</option>
							<option value="Delegacion Lujan de Cuyo">Delegacion Lujan de Cuyo</option>
							<option value="Delegacion General Alvear">Delegacion Generala Alvear</option>
							<option value="Delegacion La Paz">Delegacion La Paz</option>
						</select>
					</div>
				</div>	
				
			</div>
					
		</div>
	</div>


<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="">Comprobante de sueldo</label>
        <div class="input-group">
        <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker13").datepicker({
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
          <input name="sueldo1" id="datepicker13" type="text" class="form-control" placeholder="Desde" value="<?php echo $row['sueldo1']; ?>">
          <span class="input-group-addon">-</span>
          <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker12").datepicker({
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
          <input name="sueldo2" id="datepicker12" type="text" class="form-control" placeholder="Hasta" value="<?php echo $row['sueldo2']; ?>">
       
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="">Comprobante de recibo</label>
        <div class="input-group">
        <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker14").datepicker({
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
          <input name="recibo1" id="datepicker14" type="text" class="form-control" placeholder="Desde" value="<?php echo $row['recibo1']; ?>">
          <span class="input-group-addon">-</span>
          <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker15").datepicker({
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
          <input name="recibo2" id="datepicker15" type="text"  class="form-control" placeholder="Hasta" value="<?php echo $row['recibo2']; ?>">
       
        </div>
      </div>
    </div>
  </div>
</div>

	<div class="container">
					<label for="domicilio3" class="col-sm-1 control-label">Articulo:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="art" name="art" placeholder="Articulo" value="<?php echo $row['art']; ?>">
					</div>
				</div>

	<div class="container">
					<label for="domicilio3" class="col-sm-1 control-label">CCTN:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="cctn" name="cctn" placeholder="CCTN" value="<?php echo $row['cctn']; ?>">
					</div>
				</div>
				
<div class="container">
					<label for="domicilio3" class="col-sm-1 control-label">Ropa:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="ropa" name="ropa" placeholder="Ropa" value="<?php echo $row['ropa']; ?>">
					</div>
				</div>

<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="">Comprobante de Aportes</label>
        <div class="input-group">
        <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker16").datepicker({
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
          <input name="apor1" id="datepicker16" type="text" class="form-control" placeholder="Desde" value="<?php echo $row['apor1']; ?>">
          <span class="input-group-addon">-</span>
          <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker17").datepicker({
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
          <input name="apor2" id="datepicker17" type="text" class="form-control" placeholder="Hasta" value="<?php echo $row['apor2']; ?>">
       
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="">Comprobante de Aporte Gremial</label>
        <div class="input-group">
        <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker18").datepicker({
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
          <input name="gre1" id="datepicker18" type="text" class="form-control" placeholder="Desde" value="<?php echo $row['gre1']; ?>">
          <span class="input-group-addon">-</span>
          <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker19").datepicker({
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
          <input name="gre2" id="datepicker19" type="text" class="form-control" placeholder="Hasta" value="<?php echo $row['gre2']; ?>">
       
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="">Documentacion Reloj Control Horario</label>
        <div class="input-group">
        <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker20").datepicker({
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
          <input name="chora1" id="datepicker20" type="text" class="form-control" placeholder="Desde" value="<?php echo $row['chora1']; ?>">
          <span class="input-group-addon">-</span>
          <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker21").datepicker({
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
          <input name="chora2" id="datepicker21" type="text" class="form-control" placeholder="Hasta" value="<?php echo $row['chora2']; ?>">
       
        </div>
      </div>
    </div>
  </div>
</div>


<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="">Cronograma de Francos</label>
        <div class="input-group">
        <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker22").datepicker({
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
          <input name="franco1" id="datepicker22" type="text" class="form-control" placeholder="Desde" value="<?php echo $row['franco1']; ?>">
          <span class="input-group-addon">-</span>
          <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker23").datepicker({
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
          <input name="franco2" id="datepicker23" type="text" class="form-control" placeholder="Hasta" value="<?php echo $row['franco2']; ?>">
       
        </div>
      </div>
    </div>
  </div>
</div>



<div class="container">
  <div class="row">
    <div class="col-xs-12 col-md-3">
      <div class="form-group">
        <label for="">Comprabante de seguro Vida, ART, Polizas y Pagos</label>
        <div class="input-group">
        <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker24").datepicker({
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
          <input name="seguro1" id="datepicker24" type="text" class="form-control" placeholder="Desde" value="<?php echo $row['seguro1']; ?>">
          <span class="input-group-addon">-</span>
          <script>
						$(function () {
$.datepicker.setDefaults($.datepicker.regional["es"]);
$("#datepicker25").datepicker({
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
          <input name="seguro2" id="datepicker25" type="text" class="form-control" placeholder="Hasta" value="<?php echo $row['seguro2']; ?>">
       
        </div>
      </div>
    </div>
  </div>
</div>
			
<div class="container">
					<label for="domicilio3" class="col-sm-1 control-label">Cantidad de empleados relevados:</label>
					<div class="col-sm-3">
						<input type="text" class="form-control" id="emp" name="emp" placeholder="N° Empleados" value="<?php echo $row['emp']; ?>">
					</div>
				</div>


<div class="form">
					<label for="domicilio3" class="col-sm-2 control-label">Relevamiento de Personal N:</label>
					<textarea name="texto" rows="10" cols="40" id="texto" name="texto" placeholder="" value="<?php echo $row['texto']; ?>"></textarea>					
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