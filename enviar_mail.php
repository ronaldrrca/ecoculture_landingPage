<?php
$name = $_POST['name'];
$cellphone = $_POST['cellphone'];
$mail = $_POST['email'];
$cityCountry = $_POST['cityCountry'];
$type = $_POST['type'];
$text = $_POST['message'];
$message = "";


$header = "From: noreply@ecoculture.com.co" . "\r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
// $header .= "Mime-Version: 1.0 \r\n";
// $header .= "Content-Type: text/plain";

$message .= "Este mensaje fue enviado por: " . $name . "\r\n";
$message .= "Teléfono celular: " . $cellphone . " \r\n";
$message .= "E-mail: " . $mail . " \r\n";
$message .= "Ciudad y país: " . $cityCountry . " \r\n";
$message .= "Tipo de solicitud: " . $type . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time()) . ", a las " . date("h:i:sa") . " \r\n";
$message .= "Mensaje: " . $text . " \r\n";



$to = 'ronaldrrca@gmail.com';
$subject = $type;

mail($to, $subject, $message, $header);

header("Location:index.php");




?>