<?php
	require 'conexion.php';
	
	$id = $_GET['id_user'];
	//echo "id es " .$id;
	$sql = "select *from usuarios  WHERE id_user = '$id'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	$tipo =$row['id_user'];
	$status = $row['id_user'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edicion</title>
    
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
			
			<form class="form-horizontal" method="POST" action="usuarios_actualizar.php" autocomplete="off">
				
				<br>
				<h3 align="center">Editar Registro</h3>
				<br>
				<br>
				
				<!-- ID -->
				<div class="col-md-2">
					<label for="nombre">ID</label>
					<div>
						<input type="text" class="form-control" id="clave" name="clave" value ="<?php echo $row['id_user']?>" readonly="readonly">
					</div>
				</div>
				
				<br>

				<!-- EMPIEZA ROW -->
				<div class="row">

					<!-- Nombre -->
					<div class="col-md">
						<label for="nombre">Nombre</label>
						<div>
							<input type="text" class="form-control" id="nombre" name="nombre" value ="<?php echo $row['Nom_user']?>" required>
						</div>
					</div>
					
					<!-- Costo -->
					<div class="col-md">
						<label for="Usuario">Usuario</label>
						<div>
							<input type="text" class="form-control" id="usuario" name="usuario"  value =" <?php echo $row['Usuario'];?> " required>
						</div>
					</div>

					<!-- Tipo de Platillo -->
					<div class="col-md">
						<label for="tipo_usuario">Tipo de Usuario</label>
						<div>
							<select class="form-control" id="tipo_usuario" name="tipo_usuario">		
								<option value="Admin" <?php if($tipo=='1') echo 'selected'; ?>>Admin</option>
								<option value="Normal" <?php if($tipo=='0') echo 'selected'; ?>>Normal</option>						
							</select>
						</div>
					</div>		
					<br>
					<div class="col-md">
						<label for="estado">Estado de Usuario</label>
						<div>
							<select class="form-control" id="estado" name="estado">		
								<option value="Admin" <?php if($status=='Activo') echo 'selected'; ?>>Activo</option>
													
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
						<a href="../panel.php" class="btn btn-info">Regresar</a>
						<button type="submit" class="btn btn-primary">Editar</button>
					</div>
				</div>

				<br>

			</form>
		</div>			
	</body>
</html>