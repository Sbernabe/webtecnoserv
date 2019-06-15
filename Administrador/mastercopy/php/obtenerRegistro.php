<?php 

	require_once "conexion.php";
	$conexion=conexion();

	$id=$_POST['idjuego'];
	$sql="CALL sp_obtener_regJuego($id)";

	$result=mysqli_query($conexion,$sql);

	$ver=mysqli_fetch_row($result);

	$datos=array(
			'id_juego'=>$ver[0],
              'disciplinajU'=>$ver[1],
              'sedejU'=>$ver[2],
              'direccionjU'=>$ver[3]
					);
	echo json_encode($datos);
 ?>