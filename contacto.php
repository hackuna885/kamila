<?php
header('Content-Type: text/html; Charset=UTF-8');

if (isset($_POST['txtNombre']) && !empty($_POST['txtNombre']) &&
	isset($_POST['txtCorreo']) && !empty($_POST['txtCorreo']) &&
	isset($_POST['txtMensaje']) && !empty($_POST['txtMensaje'])) {
	
	if(isset($_POST['txtCorreo'])) {
 
	// Debes editar las próximas dos líneas de código de acuerdo con tus preferencias
	$email_to = "contacto@afca.com.mx";
	$email_subject = "Tienes un mensaje del sitio WEB!";
	 
	// Aquí se deberían validar los datos ingresados por el usuario
	if(!isset($_POST['txtCorreo']) ||
	!isset($_POST['txtMensaje'])) {
	 
	echo "Problemas el enviar la info.";
	die();
	}
	 
	$email_message = "Detalles del Contacto:\n\n";
	$email_message .= "Nombre: " . $_POST['txtNombre'] . "\n";
	$email_message .= "Correo: " . $_POST['txtCorreo'] . "\n";
	$email_message .= "Mensaje: " . $_POST['txtMensaje'] . "\n";
	 
	 
	// Ahora se envía el e-mail usando la función mail() de PHP
	$headers = 'From: '.$email_from."\r\n".
	'Reply-To: '.$email_from."\r\n" .
	'X-Mailer: PHP/' . phpversion();
	@mail($email_to, $email_subject, $email_message, $headers);
	 
	header('Location: index.php');
	}
	echo "<script> window.location='index.php';</script>";
}else{
	echo "<script> window.location='index.php';</script>";
}
 

?>