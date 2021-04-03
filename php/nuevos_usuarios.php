<?php
        require 'conexion.php';

        $NomC = $_POST['NomC'];
        $NomS = $_POST['NomS'];
        $pass1 = $_POST['contra1'];
        $pass2 = $_POST['contra2'];


        $md5pass = md5($pass1);
        /*
        echo $NomC . "</br>";
        echo $NomS . "</br>";
        echo $pass1 . "</br>";
        echo $pass2 . "</br>";
        echo $md5pass . "</br>";*/
        $sqlusuarios = "select count(*) as contar from usuarios where Usuario = '$NomS'";
        $consulta = mysqli_query($conexion,$sqlusuarios);
        $array = mysqli_fetch_array($consulta);
        $consultainsert ="insert into usuarios values('null','$NomC','$NomS','$md5pass','Normal')";
        echo $consultainsert;

        if ($pass1==$pass2) {
            if ($array['contar']>0) {
                echo '<script> alert("Atencion, este usuario ya esta en uso, por favor tienes que escoje otro...");</script>';
                echo "<script> location.href='../registrarvista.php'</script>";
            }else{    
                mysqli_query($conexion,$consultainsert);   
                echo '<script> alert("Registro con Exito");</script>';  
                echo "<script> location.href='../registrarvista.php'</script>";    
            }
        }
        else{
            echo '<script> alert("Contraseña no son iguales");</script>';
            echo "<script> location.href='../registrarvista.php'</script>";
        }


?>
<!DOCTYPE html>
<html lang="en">
        <head>

        </head>
    <body>
        
    </body>
    <script>

    </script>
</html>