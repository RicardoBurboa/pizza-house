<?php

/*prod_id
prod_nombre
prod_desc
prod_costo
prod_imagen
prod_tipo
*/
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Registro</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
</head>
<body>

		<br>
		<br>

		<div class="container border border-dark">
			
			<form  action="usuario_guardar_panel.php" method="POST" autocomplete="off">

				<br>
				<h3 align="center">Añadir Nuevo Usuario</h3>
				<br>
				<br>

				<!-- EMPIEZA ROW -->
				<div class="row">

					<!-- Nombre -->
					<div class="col-md">
						<label for="nombre">Nombre</label>
						<div>
							<input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
						</div>
					</div>

					<!-- usuario -->
					<div class="col-md">
						<label for="Costo">Usuario</label>
						<div>
							<input type="text" class="form-control" id="Usuario" name="Usuario" placeholder="Usuario" required>
						</div>
					</div>
					
					<!-- Tipo de usuario -->
					<div class="col-md">
						<label for="tipo_comida">Tipo de Usuario</label>
						<div>
							<select class="form-control" id="tipo_usuario" name="tipo_usuario">
								<option value="Seleccionar">-Seleccionar-</option>
								<option value="Admin">Admin</option>
								<option value="Normal">Normal</option>
							</select>
						</div>
					</div>

				</div>
				<!-- TERMINA ROW -->
				
				<br>

				<br>
				<br>

				<!-- Botones -->
				<div class="center-block">
					<div class="center-block">
						<a href="../usuarios.php" class="btn btn-info">Regresar</a>
						<button type="submit" class="btn btn-primary">Guardar</button>
					</div>
				</div>

				<br>

			</form>
		</div>
	</body>
</html>