<?php
$destinatario = 'ortuno.prudencio.ricardo.02@gmail.com';
$nombre = $_post['nombre'];
$asunto = $_post['asunto'];
$mensaje = $_post['mensaje'];
$email = $_post['email'];

$header = "Hola estoy interesado";
$mensajeCompleto = $mensaje . "\nAtentamente: " . $nombre;

mail($destinatario, $asunto, $mensajeCompleto, $header);
echo "<script>alert ('correo enviado exitosamente')</script>";
echo "<script>setTimeout(\"location.href='#'\",1000)</script>";
?>