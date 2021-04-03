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
                <h1 class="display-1">Comentarios</h1>
                <h3 class="display-5">Nos interesa tu opinión</h3>
            </div>
        </div>

        <main role="main" class="container">
            
            <!-- Default form contact -->
            <form class="text-center border border-light p-5" action="#!">

                <p class="h4 mb-4">Deja tu comentario</p>

                <div class="row">

                    <div class="col-md">
                        <!-- Name -->
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Nombre">
                    </div>

                    <div class="col-md">
                        <!-- Telephone -->
                        <input type="text" id="defaultContactFormName" class="form-control mb-4" placeholder="Teléfono">
                    </div>

                    <div class="col-md">
                        <!-- Email -->
                        <input type="email" id="defaultContactFormEmail" class="form-control mb-4" placeholder="Correo Electrónico">
                    </div>

                </div>

                <!-- Subject -->
                <label>Asunto</label>
                <select class="browser-default custom-select mb-4">
                    <option value="" disabled>Elige una opción</option>
                    <option value="1" selected>Retroalimentación</option>
                    <option value="2">Reportar un error en la página</option>
                    <option value="3">Sugerencias</option>
                </select>

                <!-- Message -->
                <div class="form-group">
                    <textarea class="form-control rounded-0" id="exampleFormControlTextarea2" rows="3" placeholder="Mensaje"></textarea>
                </div>

                <!-- Send button -->
                <button class="btn btn-info btn-block" type="submit">Enviar</button>

            </form>
            <!-- Default form contact -->
            
        </main>

        <br>
        <br>
        <br>
        <br>

</body>

<!-- Footer -->
<?php
    require_once('../pizza_house/templates/footer.php');
    ?>

<!-- Footer -->

</html>