<!DOCTYPE html>
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
                        <a class="nav-item nav-link" id = "panelAm" href="panel.php">Panel de Administración</a>
                            <a class="nav-item nav-link" href="../pizza_house/php/salir.php">Cerrar Sesión</a>
                        -->
                            
                        <!-- {% else %} -->
                            <a class="nav-item nav-link" href="loginvista.php">Iniciar Sesión</a>
                            <a class="nav-item nav-link" href="registrarvista.php">Registrarse</a>
                        <!-- {% endif %} -->
                    </div>
                    <!-- Navbar Right Side -->
                    <div class="navbar-nav">
                        <a class="nav-item nav-link" href="index.php">Inicio</a>
                        <a class="nav-item nav-link" href="menu.php">Menú</a>
                        <a class="nav-item nav-link" href="servicios.php">Servicios</a>
                        <a class="nav-item nav-link" href="comentarios.php">Comentarios</a>
                        <a class="nav-item nav-link" href="acerca_de.php">Acerca de</a>
                        <a class="nav-item nav-link" href="contacto.php">Contacto</a>    
                    </div>
                </div>
        </nav>
    </header>
    <!--

      session_start();

      if(isset($_SESSION['username'])){
            if(empty($_SESSION['username'])){
                  header("Location: ../pizza_house/loginvista.php");
            }else{
              //    echo "<a href='../pizza_house/php/salir.php'>Salir</a>";
            }
      }else{
            echo "no existe";
           // header("Location: ../index.php");
      }*/
    -->