<?php
	//Como el elemento es un arreglos utilizamos foreach para extraer todos los valores
	foreach($_FILES["archivo"]['tmp_name'] as $key => $tmp_name)
	{
		//Validamos que el archivo exista
		if($_FILES["archivo"]["name"][$key]) {
			$filename = $_FILES["archivo"]["name"][$key]; //Obtenemos el nombre original del archivo
			
			$source = $_FILES["archivo"]["tmp_name"][$key]; //Obtenemos un nombre temporal del archivo
			
			$directorio = 'docs/'; //Declaramos un  variable con la ruta donde guardaremos los archivos
			
			//Validamos si la ruta de destino existe, en caso de no existir la creamos
			if(!file_exists($directorio)){
				mkdir($directorio, 0777) or die("No se puede crear el directorio de extracci&oacute;n");	
			}			
			$dir=opendir($directorio); //Abrimos el directorio de destino
			$target_path = $directorio.'/'.$filename; //Indicamos la ruta de destino, así como el nombre del archivo			
			//Movemos y validamos que el archivo se haya cargado correctamente
			//El primer campo es el origen y el segundo el destino
			if(move_uploaded_file($source, $target_path)) {	
				echo "<script>alert('El archivo se ha almacenado en forma exitosa.');</script>;";
				} else {	
				echo" <script>alert('Ha ocurrido un error, por favor inténtelo de nuevo.');</script>;";
			}
			closedir($dir); //Cerramos el directorio de destino
		}
	}
	//echo 'Nombre del archivo es: '.$filename;
	require 'conexion.php';
	
	$nombre = $_POST['nombre'];
	$desc = $_POST['desc'];
    $costo = $_POST['costo'];
	$tipo_alimiento = $_POST['tipo_comida'];
	$sql = "INSERT INTO productos  VALUES ('null','$nombre', '$desc', '$costo', '$tipo_alimiento','$filename')";
	//echo 'sql '.$sql ;
	$resultado = $conexion->query($sql);
?>


<html lang="es">
	<head>		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    
        <!-- Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  
	</head>
	<body>
		<div class="container">
				<div style="text-align:center">
					<div class="center-block">
						<?php if($resultado) { ?>
							<h1>Se ha guardado un registro con éxito.</h1>
							<?php } else { ?>
							<h1>Hubo un error al guardar el registro.</h1>
						<?php } ?>
					</div>
					
					<br>
					
					<div class="center-block">
						<a href="nuevoproducto.php" class="btn btn-primary">Regresar</a>
					</div>
					
				</div>
		</div>
	</body>
</html>