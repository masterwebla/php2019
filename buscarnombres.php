<?php
	require("conexion.php");
	$nombre = $_POST['nombre'];

	$consulta = "SELECT * FROM usuarios WHERE nombre LIKE '%$nombre%'";
	$resultado = $conn->query($consulta);

	while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
		echo "<tr>";
		echo "<td>".$fila['nombre']."</td>";
		echo "<td>".$fila['email']."</td>";
		echo "<td>".$fila['fecha']."</td>";
		echo "<td>".$fila['ciudad']."</td>";
		echo "</tr>";
	}
?>