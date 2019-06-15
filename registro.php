<?php
require 'conexion.php';
require 'funcs/funcs.php';

$errors = array();

if(!empty($_POST))
	{
		$nombre = $mysqli->real_escape_string($_POST['nombre']);	
		$apellido = $mysqli->real_escape_string($_POST['apellido']);
		$email = $mysqli->real_escape_string($_POST['email']);	
		$celular = $mysqli->real_escape_string($_POST['celular']);	
		$password = $mysqli->real_escape_string($_POST['password']);
		$documento = $mysqli->real_escape_string($_POST['documento']);
			
		$activo = 0;
		$tipo_usuario = 2;

if(isNull($nombre, $apellido, $email, $celular, $password, $documento))
		{
			$errors[] = "Debe llenar todos los campos";
		}
		
		if(!isEmail($email))
		{
			$errors[] = "Dirección de correo inválida";
		}
		
		if(emailExiste($usuario))
		{
			$errors[] = "El nombre de usuario $usuario ya existe";
		}
		
		if(emailExiste($email))
		{
			$errors[] = "El correo electronico $email ya existe";
		}
?>