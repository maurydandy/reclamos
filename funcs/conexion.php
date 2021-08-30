<?php
	
	$mysqli=new mysqli("localhost","root","","reclamo"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	if(mysqli_connect_errno()){
		echo 'Conexion Fallida : ', mysqli_connect_error();

	echo "coneccion exitosa";
		exit();
	}



//echo  getUrl("http://www.google.com");

?>

<?php
	
	//$mysqli=new mysqli("localhost","root","computos","login"); //servidor, usuario de base de datos, contraseña del usuario, nombre de base de datos
	
	//if(mysqli_connect_errno()){
	//	echo 'Conexion Fallida : ', mysqli_connect_error();

	//echo "coneccion exitosa";
	//	exit();
	//}