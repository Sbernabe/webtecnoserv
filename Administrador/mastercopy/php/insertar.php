<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$disciplina=$_POST['disciplinaj'];
	$sede=$_POST['sedej'];
	$direccion=$_POST['direccionj'];

	$sql="CALL sp_insertar_datos('$disciplina','$sede','$direccion')";

	echo mysqli_query($conexion,$sql);

 ?>