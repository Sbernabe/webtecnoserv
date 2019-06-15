<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$id_juego=$_POST['id_juego'];
	$disciplinajU=$_POST['disciplinajU'];
	$sedejU=$_POST['sedejU'];
	$direccionjU=$_POST['direccionjU'];

	$sql="CALL sp_actualizar_datos('$disciplinajU',
									'$sedejU',
									'$direccionjU',
									'$id_juego')";
									
	echo mysqli_query($conexion,$sql);
 ?>