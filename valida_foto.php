<?php
include  'conexion.php';
$nom=$_REQUEST["txtnom"];
$foto=$_FILES["foto"]["name"];
$ruta=$_FILES["foto"]["tmp_name"];
$destino="Imagenes/".$foto;
copy($ruta,$destino);
mysqli_query($con,"insert into foto (nombre,foto) values('$nom','$destino')");
header("Location: foto.php");
?>
