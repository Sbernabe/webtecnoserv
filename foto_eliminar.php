<?php 

include  'conexion.php';
	$id=$_POST['codigo'];
    $con->query("CALL lis_eliminar('$id')");
    header("Location: foto.php");
 ?>
 <script type="text/javascript">
	alert("Producto Eliminado exitosamente");
	window.location.href='foto.php';
</script>


