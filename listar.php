<?php
	//CONECTARNOS CON LA BASE DE DATOS
	require("conexion.php");

	//HACER LA CONSULTA A LA TABLA USUARIOS
	$sql_consultar = "SELECT * FROM usuarios ORDER BY nombre ASC";
	$resultado = $conn->query($sql_consultar);

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Listado de usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Listado de Usuarios <a class="btn btn-success" href="registro.php">Nuevo</a></h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Fecha</th>
					<th>Ciudad</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
					<tr>
						<td><?php echo $fila['nombre']; ?></td>
						<td><?php echo $fila['email']; ?></td>
						<td><?php echo $fila['fecha']; ?></td>
						<td><?php echo $fila['ciudad']; ?></td>
						<td>
							<a href="editar.php?id=<?php echo $fila['id']; ?>" class="btn btn-info">Editar</a>
							<a href="borrar.php?id=<?php echo $fila['id'] ?>" class="btn btn-danger">Borrar</a>
						</td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/boottrap.min.js"></script>
</body>
</html>