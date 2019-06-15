<?php
include  'conexion.php';
$nomb=$_REQUEST["txtnomb"];
$archivo=$_FILES["archivo"]["name"];
$tamanio=$_FILES['archivo']['size'];
$ruta=$_FILES["archivo"]["tmp_name"];
$destino="archivo/".$archivo;
copy($ruta,$destino);
$con->query("CALL registrar_documento('$nomb','$destino','$tamanio')");
header("Location: documento.php");
?>
