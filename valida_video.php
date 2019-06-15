<?php
include  'conexion.php';
$nomb=$_REQUEST["txtnomb"];
$video=$_FILES["video"]["name"];
$ruta=$_FILES["video"]["tmp_name"];
$destino="video/".$video;
copy($ruta,$destino);
$con->query("CALL registrar_video('$nomb','$destino')");
header("Location: video.php");
?>
