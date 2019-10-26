<?php 
	
	//PASO 1: Recibir lo datos
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$fecha = $_POST['fecha'];
	$ciudad = $_POST['ciudad'];

	//PASO 2: CONECTARNOS CON LA BASE DE DATOS
	require('conexion.php');

	//PASO 3: INSERTAR EN LA BASE DE DATOS
	$sql_insertar = "INSERT INTO usuarios (nombre,email,fecha,ciudad) 
					VALUES ('$nombre','$email','$fecha','$ciudad')";
	$conn->exec($sql_insertar);

	header("location:registro.php");

?>