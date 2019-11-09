<?php
	require("conexion.php");
	$id = $_POST['id'];

	$consulta = "SELECT * FROM usuarios WHERE id='$id'";
	$resultado = $conn->query($consulta);

	$fila = $resultado->fetch(PDO::FETCH_ASSOC);
	echo "<tr>";
	echo "<td>".$fila['nombre']."</td>";
	echo "<td>".$fila['email']."</td>";
	echo "<td>".$fila['fecha']."</td>";
	echo "<td>".$fila['ciudad']."</td>";
	echo "</tr>";
?>