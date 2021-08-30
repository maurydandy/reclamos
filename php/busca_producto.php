<?php
include('conexion.php');

$dato = $_POST['dato'];

//EJECUTAMOS LA CONSULTA DE BUSQUEDA

$registro = mysql_query("SELECT * FROM agenda WHERE cuit LIKE '%$dato%' OR expe LIKE '%$dato%' or empresa LIKE '%$dato%' ORDER BY id ASC");

//CREAMOS NUESTRA VISTA Y LA DEVOLVEMOS AL AJAX

echo '<table class="table table-striped table-condensed table-hover">
        	<tr>
			                <th width="200">Cuit</th>
			                <th width="200">Empresa</th>
			                <th width="150">Expediente</th>
			                 <th width="150">Acta</th>
			                <th width="150">Fecha</th>
			                <th width="150">Hora</th>
			               
			            </tr>';
if(mysql_num_rows($registro)>0){
	while($registro2 = mysql_fetch_array($registro)){
		echo '<tr>
			<td>'.$registro2['cuit'].'</td>
			<td>'.$registro2['empresa'].'</td>
			<td>'.$registro2['expe'].'</td>
			<td> '.$registro2['acta'].'</td>
            <td>'.$registro2['fecha'].'</td>
			<td>'.$registro2['hora'].'</td>
			</tr>';		
	}
}else{
	echo '<tr>
				<td colspan="6">No se encontraron resultados</td>
			</tr>';
}
echo '</table>';
?>