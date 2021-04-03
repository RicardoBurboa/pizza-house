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
                <h1 class="display-1">Pizza House</h1>
                <h3 class="display-5">Las mejores pizzas a la vuelta de tu esquina</h3>
            </div>
        </div>

        <main role="main" class="container">
            
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100 h-100" src="img/carrusel/carrusel1.jpg" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Conócenos</h5>
                            <p>Tenemos las mejores pizzas</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/carrusel/carrusel2.jpg" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Mejor Lugar</h5>
                            <p>Nuestras instalaciones son las mejores</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="img/carrusel/carrusel3.jpg" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Precios Accesibles</h5>
                            <p>Perfectos para tu bolsillo</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>

            <div class="container">
                <h2 class="display-4 py-5 mt-5 text-center">Contamos con las mejores pizzas en México</h2>
                <div class="row">
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="img/pizzas/pizza_pepperoni.png">
                            <div class="card-block">
                                <h3 class="card-title">Pizza Pepperoni</h3>
                                <p class="card-text">Lorem ninja ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="img/pizzas/pizza_mexicana.jpg">
                            <div class="card-block">
                                <h3 class="card-title">Pizza Mexicana</h3>
                                <p class="card-text">Lorem ninja ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="img/pizzas/pizza_marisco.jpg">
                            <div class="card-block">
                                <h3 class="card-title">Pizza de Mariscos</h3>
                                <p class="card-text">Lorem ninja ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-3">
                        <div class="card">
                            <img class="card-img-top img-fluid" src="img/bebidas/bebida_limon.jpg">
                            <div class="card-block">
                                <h3 class="card-title">Coctel de Limón</h3>
                                <p class="card-text">Lorem ninja ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <br>
            <hr>

            <div class="container">

                <div class="row" align="center">

                    <div class="col-md">
                            <img src="img/acerca_de/calidad.png" alt="">
                        <h1>Calidad</h1>
                        <p>Seguimos los más altos estándares de la industria.</p>
                    </div>

                    <div class="col-md">
                            <img src="img/acerca_de/reconocimiento.png" alt="">
                        <h1>Reconocimientos</h1>
                        <p>Avalados por múltiples organizaciones internacionales.</p>
                    </div>

                    <div class="col-md">
                        <img src="img/acerca_de/comida.png" alt="">
                        <h1>Sabor</h1>
                        <p>Las mejores pizzas que tendrás en tu vida.</p>
                    </div>

                </div>

                <hr>

                <div class="container">
                    <h1>Pizza House</h1>
                    <p>
                        Todo inició en 2019 cuando Burboa Astorga Ricardo y Luna García Pedro Alfonso tenían que desarrollar una página web para su materia de Programación Web en el
                        Instituto Tecnológico de Estudios Superiores de Los Cabos.
                    </p>
                    <p>
                        La pregunta del millón es la siguiente: ¿A quién no le gusta la pizza? Entonces tuvimos la maravillosa idea de hacer un sitio web orientado a las pizzas y
                        emprender nuestro negocio multimillonario.
                    </p>
                </div>
                
                <hr>
                <br>

                <div class="container">
                    <img src="img/fondos/local_pizza.jpg" alt="local_pizza" width="1050">
                </div>

                <br>

            </div>
                
        </main>

</body>


<!-- Footer
 -->
    <?php
    require_once('../pizza_house/templates/footer.php');
    ?>

</html>