<?php
	//CONECTARNOS CON LA BASE DE DATOS
	require("conexion.php");

	//RECIBIR EL ID DEL USUARIO QUE VAMOS A EDITAR
	$id = $_GET['id'];

	//CONSULTAR LA INFO DEL USUARIO
	$sql_usuario = "SELECT * FROM usuarios WHERE id='$id'";
	$resultado = $conn->query($sql_usuario);
	$fila = $resultado->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Edición de Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Editar usuario <?php echo $fila['nombre']; ?></h1>
		<form action="actualizar.php" method="post">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" value="<?php echo $fila['nombre']; ?>" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" value="<?php echo $fila['email']; ?>" required>
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" class="form-control" name="fecha" value="<?php echo $fila['fecha']; ?>" required>
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad</label>
				<select name="ciudad" class="form-control" required>
					<option <?php if($fila['ciudad']=="Bogota"){ ?> selected <?php } ?>>Bogota</option>
					<option <?php if($fila['ciudad']=="Cali"){ ?> selected <?php } ?>>Cali</option>
					<option <?php if($fila['ciudad']=="Medellin"){ ?> selected <?php } ?>>Medellin</option>
					<option <?php if($fila['ciudad']=="Barranquilla"){ ?> selected <?php } ?>>Barranquilla</option>
				</select>
			</div>
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			<div class="form-group">
				<button class="btn btn-success">Actualizar Usuario</button>
				<a class="btn btn-danger" href="listar.php">Cancelar</a>
			</div>
		</form>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>