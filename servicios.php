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
                <h1 class="display-1">Servicios</h1>
                <h3 class="display-5">Descubre nuestros servicios</h3>
            </div>
        </div>

        <main role="main" class="container">
            
            <div class="container" align="center">

                <div class="row">

                    <div class="col-md">
                            <img src="img/servicios/sano.png" alt="">
                        <h1>Ingredientes Naturales</h1>
                        <p>Nos preocupamos por la integridad de tu comida.</p>
                    </div>

                    <div class="col-md">
                            <img src="img/servicios/entrega.png" alt="">
                        <h1>Servicio a Domicilio</h1>
                        <p>Nuestros tiempos de entrega son en menos de 30 minutos en áreas cercanas.</p>
                    </div>

                    <div class="col-md">
                        <img src="img/servicios/receta.png" alt="">
                        <h1>Recetas 100% Originales</h1>
                        <p>Necesarias para darles el mejor sabor posible a nuestras pizzas.</p>
                    </div>

                </div>

                <hr>
                <br>

                <div class="container">
                    <img src="img/fondos/people_pizza.jpg" alt="local_pizza" width="1050">
                </div>

                <br>

            </div>
                
        </main>
</body>
<?php
    require_once('../pizza_house/templates/footer.php');
?>

</html>