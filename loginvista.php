<?php
session_start();
if (isset($_SESSION['nomS1'])) {
 header('Locatation: loginvista.php');
}
?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title></title>
   
    <meta name="viewport"content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <link rel="stylesheet" href="../pizza_house/styles/estilos.css">
</head>

<body>
    <form  class="formulario" action="../pizza_house/php/validar.php" method="post" >
        <div class="contenedor">
                <div class="col-12 user-img">
                <img src="img/login.jpg" width="200px">              
                </div>
            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre del Usuario"  name="nomS1" required onkeypress="return sololetras_numeros(event)" >
            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña"  name="contra0" required>
            </div>
            <input type="submit" value="Login" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿No tienes una cuenta? <a class="link" href="registrarvista.php">Registrate </a></p>
        </div>
    </form>
</body>
<style>
.user-img{
    margin-top: -50px;
    margin-bottom: 35px;
}

.user-img img{
    width: 100xp;
    height: 100px;
    box-shadow: 0px 0px 3px #848484;
    border-radius: 50%;
    display:block;
    margin:auto;
}
</style>
<script>
function sololetras_numeros(e) {
	key=e.keyCode || e.which;
 
	teclado=String.fromCharCode(key).toLowerCase();
 
	letras="qwertyuiopasdfghjklzxcvbnm12345567890 ";
   
 
	especiales="8-37-38-46-32";
 
	teclado_especial=false;
 
	for(var i in especiales){
		if(key==especiales[i]){
			teclado_especial=true;
			break;
		}
	}
 
	if(letras.indexOf(teclado)==-1 && !teclado_especial){
		return false;
	}
 
}

</script>
</html>