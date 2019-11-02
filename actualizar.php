<?php 
	//Conectarnos a la BD
	require("conexion.php");

	//Recuperar los datos
	$id = $_POST['id'];
	$nombre = $_POST['nombre'];
	$email = $_POST['email'];
	$fecha = $_POST['fecha'];
	$ciudad = $_POST['ciudad'];

	//SQL para actualizar
	$sql_actualizar = "UPDATE usuarios SET nombre='$nombre',email='$email',
					fecha='$fecha',ciudad='$ciudad' WHERE id='$id'";
	$conn->exec($sql_actualizar);

	header("location:listar.php");
?>