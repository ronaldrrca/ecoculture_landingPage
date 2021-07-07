<?php
$name = $_POST['name'];
$cellphone = $_POST['cellphone'];
$mail = $_POST['email'];
$cityCountry = $_POST['cityCountry'];
$type = $_POST['type'];
$text = $_POST['message'];

$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por " . $name . ",\r\n";
$message .= "Teléfono celular: " . $cellphone . " \r\n";
$message .= "E-mail: " . $mail . " \r\n";
$message .= "Ciudad y país: " . $cityCountry . " \r\n";
$message .= "Tipo de solicitud: " . $type . " \r\n";
$message .= "Mensaje: " . $text . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());


$to = 'bongoyor@gmail.com';
$subject = 'Mensaje de mi sitio web';

mail($to, $subject, utf8_decode($message), $header);

header("Location:index.html");




?>