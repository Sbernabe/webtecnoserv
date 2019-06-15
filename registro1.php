<?php
if(!empty($_POST)) {

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$email = $_POST['email'];
$celular = $_POST['celular'];
$password = $_POST['password'];
$captcha = $_POST['g-recaptcha-response'];

$secret = '6LdB8KIUAAAAABqTTyN5X5J0ea8VtIYVA4L-5g30';
if(!$captcha){

	echo "Por favor verifica el captcha";
}
$response = file_get_contents(filename)


?>
