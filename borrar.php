<?php 
	//Conectarnos con la BD
	require("conexion.php");

	//Recibir el ID del usuario que vamos a borrar
	$id = $_GET['id'];

	//SQL para borrar
	$sql_borrar = "DELETE FROM usuarios WHERE id='$id'";
	$conn->exec($sql_borrar);

	header("location:listar.php");
?>