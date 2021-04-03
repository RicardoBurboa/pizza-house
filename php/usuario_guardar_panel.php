<?php
        require 'conexion.php';

        $NomC = $_POST['nombre'];
        $NomS = $_POST['Usuario'];
        $pass1 = $contra="12345";
        $pass2 = $contra1="12345";
        $tipo_usuario =$_POST['tipo_usuario'];
        $md5pass = md5($pass1);
        $cadena =$NomS;
        $cadena_formateada = trim($cadena);
        /*
        echo $NomC . "</br>";
        echo $NomS . "</br>";
        echo $pass1 . "</br>";
        echo $pass2 . "</br>";
        echo $md5pass . "</br>";
        */
        $sqlusuarios = "select count(*) as contar from usuarios where Usuario = '$cadena_formateada'";
        $consulta = mysqli_query($conexion,$sqlusuarios);
        $array = mysqli_fetch_array($consulta);
        $consultainsert ="insert into usuarios values('null','$NomC','$cadena_formateada','$md5pass','$tipo_usuario')";
        echo $consultainsert;

        if ($pass1==$pass2) {
            if ($array['contar']>0) {
                echo '<script> alert("Atencion, este usuario ya esta en uso, por favor tienes que escoje otro...");</script>';
                echo "<script> location.href='nuevo_usuarios_panel.php'</script>";
            }else{    
                mysqli_query($conexion,$consultainsert);   
                echo '<script> alert("Registro con Exito");</script>';  
                echo "<script> location.href='nuevo_usuarios_panel.php'</script>";    
            }
        }
        else{
            echo '<script> alert("Contraseña no son iguales");</script>';
            echo "<script> location.href='nuevo_usuarios_panel.php'</script>";
        }


?>