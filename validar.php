<?php
include 'conexion.php';
$email=$_POST['email'];
$pass=$_POST['password'];


$consulta="SELECT * FROM usuarios WHERE emailU='$email' and passwordU='$pass'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0)
{
	header("location:home.php");
}
else{
	echo "Error en la Autentificacion";
}
mysqli_free_result($resultado);
mysqli_close($conexion);
