<?php
require_once('conexion.php');

$conexion=conexion();


$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$password = $_POST['password'];
$documento = $_POST['documento'];

$sql="CALL INSERTAR_USUARIOS('$nombre', '$apellido', '$email', '$celular', sha1('$password'), '$documento')";

echo mysqli_query($conexion, $sql);





/*
$conexion = $mysqli->get_connection();
$datos = array("nombre","apellido", "email", "celular", "passwordU","DocIdentidad");
$statement = $conexion->prepare("CALL INSERTAR_USUARIOS(?,?,?,?)");
$statement->bind_param("ssssss", $datos["NombreU"],$datos["ApellidoU"], $datos["emailU"], $datos["telefonoU"], $datos["passwordU"], $datos["DocIdentidad"]);
$statement->execute();
$statement->close();
$conexion->close(); 
*/

?>