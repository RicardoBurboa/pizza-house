<?php
    //require_once('islogin.php');
	require 'php/conexion.php';
    $where ="";
    if(!empty($_POST))
	{
		$valor = $_POST['campo'];
		if(!empty($valor)){
			$where = "WHERE prod_nombre LIKE '%$valor'";
		}
	}
	$sql = "select *from productos $where";
	
	$resultado = $conexion->query($sql);
   // echo $sql ;


?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php
    require_once('../pizza_house/templates/header.php');
    ?>

</head>
<body>

    <br>
    <br>

    <main role="main" class="container">
        <div class="row">
            
            <div class="col-md-8 border border-dark">
            
            <br>
            <h3 align="center">Catálogo de Productos</h3>
            <br>
            <br>
            
            <div class="row">
                <div class="col-md-8">
                    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="POST">
                        <b>Filtar por Nombre: </b><input type="text" id="campo" name="campo" />
                        <input type="submit" id="enviar" name="enviar" value="Buscar" class="btn btn-info" />
                    </form>
                </div>
                <div class="col-md-4">
                    <a href="php/nuevoproducto.php" class="btn btn-primary">Añadir Producto</a>
                </div>
            </div>
            
            <br>

            <div class ="container row table-responsive">
                <table class="table table-striped border border-info">
                    <thead>
                        <tr align="center">    
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Descripción</th>
                        <th>Costo</th>
                        <th>Imagen</th>
                        <th>Tipo</th>
                        <th>Editar</th>
                        <th>Eliminar</th>
                       
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ($row = $resultado->fetch_array(MYSQLI_ASSOC)) {
                        ?>
                        
                        <tr align="center">
                            <td><?php echo  $row['prod_id'];?></td>
                            <td><?php echo $row['prod_nombre'];?></td>
                            <td><?php echo $row['prod_desc'];?></td>
                            <td><?php echo $row['prod_costo'];?></td>                          
                            <td><?php echo $row['prod_img'];?></td>
                            <td><?php echo $row['prod_tipo'];?></td>
                            <td><a href="php/modificar.php?prod_id=<?php echo  $row['prod_id'];?>">Editar</a></td>
                            <td><a href="#" data-href="php/eliminar.php?prod_id=<?php echo  $row['prod_id'];?>" data-toggle="modal" data-target="#confirm-delete">Eliminar</a></td>
                            <!--
                                <td><?//php echo $row['prod_imagen'];?></td>
                            <td><a href="modificar.php?id="><span class="glyphicon glyphicon-pencil"></span></a></td>
                            <td><a href="#" data-href="eliminar.php?id" data-toggle="modal" data-target="#confirm-delete"><span class="glyphicon glyphicon-trash"></span></a></td>                    
                            -->
                        </tr>
                        
                        <?php }?>
                    </tbody>
                </table>
            </div>
            
            <br>

        	<!-- Modal -->
		    <div class="modal fade" id="confirm-delete" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
			    <div class="modal-dialog">
				    <div class="modal-content">
					    <div class="modal-header">
						    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						    <h4 class="modal-title" id="myModalLabel">Eliminar Registro</h4>
					    </div>
					    <div class="modal-body">
						    ¿Desea eliminar este registro?
					    </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-default" data-dismiss="modal">Cancelar</button>
                            <a class="btn btn-danger btn-ok">Eliminar</a>
                        </div>
				    </div>
			    </div>
        
            </div>
    
        </div>

        <div class="col-md-4">
            <div class="content-section">
                <h3>Panel de Administración</h3>
                <p class='text-muted'>Contamos con las siguientes tablas.
                <ul class="list-group">
                    <li class="list-group-item list-group-item-light"><a href="#">Catálogo de Productos</a></li>
                    <li class="list-group-item list-group-item-light"><a href="usuarios.php">Lista de Usuarios</a></li>
                </ul>
                </p>
            </div>
        </div>
        
    </div>
    </main>

    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
	
    <script>
        $('#confirm-delete').on('show.bs.modal', function(e) {
            $(this).find('.btn-ok').attr('href', $(e.relatedTarget).data('href'));
            
            $('.debug-url').html('Delete URL: <strong>' + $(this).find('.btn-ok').attr('href') + '</strong>');
        });
    </script>

</body>

<!-- Footer   <span class="glyphicon glyphicon-pencil"></span>> -->
    
    <?php
        require_once('../pizza_house/templates/footer.php');
    ?>

<!-- Footer -->
</html>