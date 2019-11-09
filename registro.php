<?php 
	//Conectar a la Base de Datos
	require("conexion.php");

	//Consultar ciudades
	$sql_ciudades = "SELECT * FROM ciudades ORDER BY nombre ASC";
	$resultado = $conn->query($sql_ciudades);
?>
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
				<input type="email" class="form-control" id="email" name="email" required onblur="consultar()">
			</div>
			<div class="form-group">
				<label for="fecha">Fecha</label>
				<input type="date" class="form-control" name="fecha" required>
			</div>
			<div class="form-group">
				<label for="ciudad">Ciudad</label>
				<select name="ciudad" class="form-control" required>
					<option value="">Seleccionar Ciudad</option>
					<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){
							echo "<option>".$fila['nombre']."</option>";
					 	} 
					?>
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
	<script>
		function consultar(){
			var email = $('#email').val();
			console.log(email);
			$.ajax({
				url:"buscaremail.php",
				data:{email:email},
				type:"POST",
				success:function(cantidad){
					console.log(cantidad);
					if(cantidad>0)
						$('#email').css({"border":"4px solid red"});
					else
						$('#email').css({"border":"4px solid green"});
				}
			});
		}
	</script>
</body>
</html>