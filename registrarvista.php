<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport"
        content="width=device-width, user-scalable=yes, initial-scale=1.0, maximum-scale=3.0, minimum-scale=1.0">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
      <link rel="stylesheet" href="../pizza_house/styles/estilos.css">
 
    

</head>

<body>
    <form class="formulario" action="../pizza_house/php/nuevos_usuarios.php" method="post">

        <h1>Registro</h1>
        <div class="contenedor">

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre Completo" name="NomC" required  onkeypress="return sololetras(event)" onpaste="return false">
                        
            </div>

            <div class="input-contenedor">
                <i class="fas fa-user icon"></i>
                <input type="text" placeholder="Nombre del Usuario" name="NomS" required onkeypress="return sololetras_numeros(event)" >

            </div>

            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Contraseña" id ="contra1"name="contra1"  minlength="5" maxlength="40" required>

            </div>
            <div class="input-contenedor">
                <i class="fas fa-key icon"></i>
                <input type="password" placeholder="Confirmar Contraseña" minlength="5" maxlength="40" id ="contra2" name="contra2" required>

            </div>
            <input type="submit"  value="Registrate" class="button">
            <p>Al registrarte, aceptas nuestras Condiciones de uso y Política de privacidad.</p>
            <p>¿Ya tienes una cuenta?<a class="link" href="loginvista.php">Iniciar Sesion</a></p>
        </div>
        
    </form> 
</body>

<script>
function sololetras(e) {
	key=e.keyCode || e.which;
 
	teclado=String.fromCharCode(key).toLowerCase();
 
	letras="qwertyuiopasdfghjklñzxcvbnm1234567890 ";
 
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
function sololetras_numeros(e) {
	key=e.keyCode || e.which;
 
	teclado=String.fromCharCode(key).toLowerCase();
 
	letras="qwertyuiopasdfghjklñzxcvbnm12345567890 ";
 
	especiales="8-37-38-46-164";
 
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