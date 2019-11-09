<?php 
	//Conectar a la Base de Datos
	require("conexion.php");

	//Consultar ciudades
	$sql_usuarios = "SELECT * FROM usuarios ORDER BY nombre ASC";
	$resultado = $conn->query($sql_usuarios);
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Datos de usuarios</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
</head>
<body>
	<div class="container">
		<h1>Datos de Usuarios</h1>
		<div class="form-group">
			<select name="usuarios" id="usuarios" class="form-control" onchange="consultar()">
				<option value="">Seleccionar Usuario</option>
					<?php while($fila = $resultado->fetch(PDO::FETCH_ASSOC)){ ?>
						<option value="<?php echo $fila['id']; ?>"><?php echo $fila['nombre']; ?></option>
					<?php } ?>
			</select>
		</div>

		<table class="table table-striped">
			<tbody id="datos">
				
			</tbody>
		</table>
	</div>
	
	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script>
		function consultar(){
			var id = $('#usuarios').val();
			console.log(id);
			$.ajax({
				url:"buscarid.php",
				data:{id:id},
				type:"POST",
				success:function(usuario){
					console.log(usuario);
					$("#datos").html(usuario);
				}
			});
		}
	</script>
</body>
</html>