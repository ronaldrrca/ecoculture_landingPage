<?php
$name = $_POST['name'];
$cellphone = $_POST['cellphone'];
$phone = $_POST['phone'];
$mail = $_POST['email'];
$city = $_POST['city'];


$header = 'From: ' . $mail . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por " . $name . ",\r\n";
$message .= "Teléfono celular: " . $cellphone . " \r\n";
$message .= "Teléfono fijo: " . $phone . " \r\n";
$message .= "E-mail: " . $mail . " \r\n";
$message .= "Ciudad: " . $city . " \r\n";
$message .= "Enviado el " . date('d/m/Y', time());
// $mensaje .= "Mensaje: " . $_POST['mensaje'] . " \r\n";

$to = 'bongoyor@gmail.com';
$subject = 'Mensaje de mi sitio web';

mail($to, $subject, utf8_decode($message), $header);

// header("Location:index.html");

//Revisar bien los datos antes de la entrega


?>