<?php 
	//conectarnos con la BD
	require("conexion.php");

	//Recibir el email ingresado por el usuario
	$email = $_POST['email'];

	//Consulta del email en la tabla usuarios
	$sql_email = "SELECT email FROM usuarios WHERE email='$email'";
	$resultado = $conn->query($sql_email);
	$cantidad = $resultado->rowCount();

	echo $cantidad;

?>