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
	<title>Buscar usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Buscar Usuarios <a class="btn btn-success" href="registro.php">Nuevo</a></h1>
		<input type="text" name="nombrein" id="nombrein" onkeyup="buscar()">
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Email</th>
					<th>Fecha</th>
					<th>Ciudad</th>
				</tr>
			</thead>
			<tbody id="encontrados">
				<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
					<tr>
						<td><?php echo $fila['nombre']; ?></td>
						<td><?php echo $fila['email']; ?></td>
						<td><?php echo $fila['fecha']; ?></td>
						<td><?php echo $fila['ciudad']; ?></td>
					</tr>
				<?php } ?>
			</tbody>
		</table>
	</div>

	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function buscar(){
			var nombre = $("#nombrein").val();
			console.log(nombre);
			$.ajax({
				url:"buscarnombres.php",
				data:{nombre:nombre},
				type:"POST",
				success:function(resultado){
					console.log(resultado);
					$('#encontrados').html(resultado);
				}
			});
		}
	</script>
</body>
</html>