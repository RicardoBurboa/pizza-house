<?php
	require 'conexion.php';
	
	$id = $_GET['prod_id'];
	//echo "id es " .$id;
	$sql = "select *from productos  WHERE prod_id = '$id'";
	$resultado = $conexion->query($sql);
	$row = $resultado->fetch_array(MYSQLI_ASSOC);
	$tipo =$row['prod_tipo'];
	$desc =$row['prod_desc'];

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
			
			<form class="form-horizontal" method="POST" action="actualizar_productos.php" enctype="multipart/form-data" autocomplete="off">
				
				<br>
				<h3 align="center">Editar Registro</h3>
				<br>
				<br>
				
				<!-- ID -->
				<div class="col-md-2">
					<label for="nombre">ID</label>
					<div>
						<input type="text" class="form-control" id="clave" name="clave" value ="<?php echo $row['prod_id']?>" readonly="readonly">
					</div>
				</div>
				
				<br>

				<!-- EMPIEZA ROW -->
				<div class="row">

					<!-- Nombre -->
					<div class="col-md">
						<label for="nombre">Nombre</label>
						<div>
							<input type="text" class="form-control" id="nombre" name="nombre" value ="<?php echo $row['prod_nombre']?>" required>
						</div>
					</div>
					
					<!-- Costo -->
					<div class="col-md">
						<label for="Costo">Costo</label>
						<div>
							<input type="text" class="form-control" id="costo" name="costo"  value =" <?php echo $row['prod_costo'];?> " required>
						</div>
					</div>

					<!-- Tipo de Platillo -->
					<div class="col-md">
						<label for="tipo_comida">Tipo de Platillo</label>
						<div>
							<select class="form-control" id="tipo_comida" name="tipo_comida">											
								<option value="Pizza" <?php if($tipo=='Pizza') echo 'selected'; ?>>Pizza</option>
								<option value="Bebida" <?php if($tipo=='Bebida') echo 'selected'; ?>>Bebida</option>						
							</select>
						</div>
					</div>
		<!--inicio	 del php-->
		<?php 
			require ("../php/conexion.php");
			$sql = "select *from productos  WHERE prod_id = '$id'";
			$result = $conexion->query($sql);
    	?>	
       <?php 
			if ($result->num_rows > 0) 
			{
				while($row = $result->fetch_assoc()) 
				{
   		?>	
   		<?php  
            $var_img = $row["prod_img"];  
            $ruta = "../php/docs/" .  $var_img;
    	?>
            <?php echo "<img src='$ruta' width='100' height='100'/>";?>
        <?php 	      
           		}   
            }
			else 
			{
                echo "No hay datos";
            }
        ?>
            <!--fin del php-->
					<!-- Imagen -->
					<div class="col-md">
						<label for="Costo">Imagen</label>
						<div>
							<label for=><?php echo $row['prod_img'];?></label>
						<input type="file" class="form-control" id="archivo[]" name="archivo[]" multiple="">
						</div>
					</div>				
				</div>
				<!-- TERMINA ROW -->

				<br>
		
				<!-- Descripción -->
				<div>
					<label for="text">Descripción</label>
					<div>
						<!-- <input type="text" class="form-control" id="desc" name="desc"  value="<//?php echo $row['prod_desc'];?>" required> -->
						<textarea type="text" class="form-control" id="desc" name="desc" rows="3" required><?php  echo $desc?></textarea>
					</div>
				</div>

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