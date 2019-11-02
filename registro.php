<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Registro de Usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Registro</h1>
		<form action="guardar.php" method="post">
			<div class="form-group">
				<label for="nombre">Nombre</label>
				<input type="text" class="form-control" name="nombre" required>
			</div>
			<div class="form-group">
				<label for="email">Email</label>
				<input type="email" class="form-control" name="email" required>
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" class="form-control" name="fecha" required>
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad</label>
				<select name="ciudad" class="form-control" required>
					<option>Bogota</option>
					<option>Cali</option>
					<option>Medellin</option>
					<option>Barranquilla</option>
				</select>
			</div>
			<div class="form-group">
				<button class="btn btn-success">Guardar Usuario</button>
				<a href="listar.php" class="btn btn-danger">Cancelar</a>
			</div>
		</form>
	</div>
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
</body>
</html>