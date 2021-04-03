<?php
require 'conexion.php';
session_start();
$usuario = $_POST['nomS1'];
$cont = $_POST['contra0'];
$cadena =$usuario;
$cadena_formateada = trim($cadena);
$md5pass = md5($cont);
$sql = "select count(*) as contar from usuarios where Usuario = '$cadena_formateada' and Pass = '$md5pass' and status ='Activo';";
//$sql1 ="select *from usuarios where Usuario= '$usuario' and Pass ='$md5pass'";
echo $sql;

$consulta = mysqli_query($conexion,$sql);
$array = mysqli_fetch_array($consulta);
if ($array['contar']>0) {
	$_SESSION['username']=$usuario;
	header("location: ../index.php ");
}else{
	
	echo '<script> alert("Datos Incorrectos o esta usuario esta dabo de baja.");</script>';
	echo "<script> location.href='../loginvista.php'</script>";
}
//INSERT INTO `usuarios`(`id_user`, `Nom_user`, `Usuario`, `Pass`, `tipo`) VALUES (null,"pedro","f",md5('1234'),1)
?>
