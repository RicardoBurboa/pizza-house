<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="esp">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>prueba imagen</title>
</head>
<body>
    <?php 
        require ("php/conexion.php");
        $sql = "SELECT * FROM productos where  prod_tipo ='Pizza'";
        $result = $conexion->query($sql);
        echo $sql;

    ?>	
    <div class="contenedor">
    <?php 
        if ($result->num_rows > 0) {
  
            while($row = $result->fetch_assoc()) {
    ?>	
    <div class="nota2">
    <?php  
            $var_nombre= $row["prod_nombre"];
            $var_precio= $row["prod_costo"];
            $var_img = $row["prod_img"];  
            $var_desc = $row["prod_desc"];  
            $var_tipo = $row["prod_tipo"];  
            $ruta = "php/docs/" .  $var_img;
    ?>
     <div class="notaTexto2">
    <?php echo "<img src='$ruta' width='150' height='180'/>";?>
    <?php  echo "<p>Nombre $var_nombre</p>";?>
    <?php  echo "<p>Costo $$var_precio </p>";?>
    <?php  echo "<p>Desc $var_desc</p>";?>
    <?php  echo "<p>Tipo $var_tipo</p>";?>
        <?php 
            echo "<td><a href=productomas.php?ref=".$row['prod_id']."> Leer Más</a></td>";
        ?>	

    </div>
    </div>		
	<?php 	      
                }   
            }
        else {
            echo "No hay datos";
        }
    ?>
    
</body>
</html>
