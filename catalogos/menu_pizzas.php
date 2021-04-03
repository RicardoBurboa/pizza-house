
<!DOCTYPE html>
<html lang="en">
<head>
<?php
    session_start();

    if(isset($_SESSION['username'])){
            echo ' <!DOCTYPE html>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
            <meta http-equiv="X-UA-Compatible" content="ie=edge">
            <title>Pizza House</title>
        
            <!-- Bootstrap CSS -->
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
            
            <!-- Bootstrap JS -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        
                <header class="site-header">
                <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                    <a class="navbar-brand mr-4" href="index.php">Pizza House</a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                            <div class="navbar-nav mr-auto">
                              
                       
                                <!-- {% if user.is_authenticated %} -->
                                    <a class="nav-item nav-link" id = "panelAm" href="../panel.php">Panel de Administración</a>
                                    <a class="nav-item nav-link" href="../pizza_house/php/salir.php">Cerrar Sesión</a>
                            </div>
                            <!-- Navbar Right Side -->
                            <div class="navbar-nav">
                                <a class="nav-item nav-link" href="../index.php">Inicio</a>
                                <a class="nav-item nav-link" href="../menu.php">Menú</a>
                                <a class="nav-item nav-link" href="../servicios.php">Servicios</a>
                                <a class="nav-item nav-link" href="../comentarios.php">Comentarios</a>
                                <a class="nav-item nav-link" href="../acerca_de.php">Acerca de</a>
                                <a class="nav-item nav-link" href="../contacto.php">Contacto</a>    
                            </div>
                        </div>
                </nav>
            </header>';
    }
        else{
           echo '<!DOCTYPE html>
           <meta charset="UTF-8">
               <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
               <meta http-equiv="X-UA-Compatible" content="ie=edge">
               <title>Pizza House</title>
           
               <!-- Bootstrap CSS -->
               <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
               
               <!-- Bootstrap JS -->
               <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
               <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
               <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
               <header class="site-header">
                   <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                       <a class="navbar-brand mr-4" href="index.php">Pizza House</a>
                       <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                           <span class="navbar-toggler-icon"></span>
                       </button>
                       <div class="collapse navbar-collapse" id="navbarNav">
                               <div class="navbar-nav mr-auto">
                                 
                          
                                   <!-- {% if user.is_authenticated %} 
                                   <a class="nav-item nav-link" id = "panelAm" href="../panel.php">Panel de Administración</a>
                                       <a class="nav-item nav-link" href="../pizza_house/php/salir.php">Cerrar Sesión</a>
                                   -->
                                       
                                   <!-- {% else %} -->
                                       <a class="nav-item nav-link" href="../loginvista.php">Iniciar Sesión</a>
                                       <a class="nav-item nav-link" href="../registrarvista.php">Registrarse</a>
                                   <!-- {% endif %} -->
                               </div>
                               <!-- Navbar Right Side -->
                               <div class="navbar-nav">
                                   <a class="nav-item nav-link" href="../index.php">Inicio</a>
                                   <a class="nav-item nav-link" href="../menu.php">Menú</a>
                                   <a class="nav-item nav-link" href="../servicios.php">Servicios</a>
                                   <a class="nav-item nav-link" href="../comentarios.php">Comentarios</a>
                                   <a class="nav-item nav-link" href="../acerca_de.php">Acerca de</a>
                                   <a class="nav-item nav-link" href="../contacto.php">Contacto</a>    
                               </div>
                           </div>
                   </nav>
               </header>';

        }
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
                <a href="../menu.php" class="btn btn-success my-2">Ver Todo</a>
                <a href="menu_pizzas.php" class="btn btn-danger my-2">Pizzas</a>
                <a href="menu_bebidas.php" class="btn btn-info my-2">Bebidas</a>
              
            </p>
        </div>

        <hr>
        
        <main role="main" class="container">

            <div class="album py-5 bg-light">

                <div class="container">

                    <div class="row">
                        
                        <!-- inicio del php-->
                        <?php 
                            require ("../php/conexion.php");
                            $sql = "SELECT * FROM productos WHERE prod_tipo = 'Pizza'";
                            $result = $conexion->query($sql);
                            if ($result->num_rows > 0) {
                                while($row = $result->fetch_assoc()) {
                                    $var_nombre= $row["prod_nombre"];
                                    $var_precio= $row["prod_costo"];
                                    $var_img = $row["prod_img"];  
                                    $var_desc = $row["prod_desc"];  
                                    $var_tipo = $row["prod_tipo"];  
                                    $ruta = "../php/docs/" .  $var_img;
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
<footer class="page-footer font-small bg-dark text-white">

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">© 2019 Copyright:
        <a href="../index.php"> PizzaHouse.com</a>
        | Hecho por Burboa y Luna 7IS-01V
    </div>
    <!-- Copyright -->
    
</footer>
<!-- Footer -->

</html>