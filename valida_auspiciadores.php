<?php
include  'conexion.php';
$nom=$_REQUEST["txtnom"];
$des=$_REQUEST["txtdes"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="aus/".$foto;
copy($ruta,$destino);
mysqli_query($con,"insert into auspiciador  (nombre,descripcion,foto) values('$nom','$des','$destino')");
header("Location: auspiciador.php");
?>
