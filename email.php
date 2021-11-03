<?php
$mail = $_POST['email'];

$header = 'From: ' . "jdcera4@gmail.com" . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$mensaje .= "Seras informado con la nueva informacion sobre nuestra aplicacion " " \r\n";
$mensaje .= "Mantente antento sobre los nuevos cambios"" \r\n";
$mensaje .= "Enviado el " . date('d/m/Y', time());

$asunto = 'Mensaje de mi sitio web';

mail($email, $asunto, utf8_decode($mensaje), $header);

header("Location:index.html");
?>