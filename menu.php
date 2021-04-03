<!DOCTYPE html>
<html lang="en">
<head>

<?php
    require_once('../pizza_house/templates/header.php');
    ?>

</head>
<body>

        <div class="jumbotron jumbotron-fluid bg-warning text-black text-center">
            <div class="container">
                <h1 class="display-1">Menú</h1>
                <h3 class="display-5">Consulta nuestros dos catálogos de productos</h3>
            </div>
        </div>

        <div class="container" align="center">
            <p>
                <a href="menu.php" class="btn btn-success my-2">Ver Todo</a>
                <a href="catalogos/menu_pizzas.php" class="btn btn-danger my-2">Pizzas</a>
                <a href="catalogos/menu_bebidas.php" class="btn btn-info my-2">Bebidas</a>
            </p>
        </div>
        
        <hr>

        <main role="main" class="container">

            <div class="album py-5 bg-light">

                <div class="container">

                    <div class="row">
            
                        <!-- inicio del php-->
                        <?php 
                            require ("php/conexion.php");
                            $sql = "SELECT * FROM productos";
                            $result = $conexion->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $var_nombre= $row["prod_nombre"];
                                    $var_precio= $row["prod_costo"];
                                    $var_img = $row["prod_img"];  
                                    $var_desc = $row["prod_desc"];  
                                    $var_tipo = $row["prod_tipo"];  
                                    $ruta = "php/docs/" .  $var_img;
                        ?>	
                    
                        <div class="col-md-4">
                            <div class="card mb-4 box-shadow">
                            <?php echo "<img class='card-img-top' src='$ruta' width='300' height='300'/>";?>
                                <div class="card-body">
                                    <h2><?php echo $var_nombre?></h2>
                                    <p class="card-text"><?php  echo "<p>$var_desc</p>";?></p>
                                    <div class="d-flex justify-content-between align-items-center">
                                        <small class="text-muted"> <?php  echo "<p>Costo $$var_precio </p>";?></small>
                                    <?php 
                                        echo "<a href=detalle.php?ref=".$row['prod_id'].">Ver Detalle</a>";
                                    ?>	
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php 	      
                                    }   
                                }
                            else {
                                echo "No hay datos";
                            }
                        ?>
                        <!--fin del php-->

                    </div>
                </div>
            </div>
        </main>

</body>

<!-- Footer -->
<?php
    require_once('../pizza_house/templates/footer.php');
    ?>

<!-- Footer -->

</html>