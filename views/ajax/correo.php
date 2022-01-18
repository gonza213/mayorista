<?php
$email = $_POST['email'];
$mensaje =  $_POST['mensaje'];

// $to = "info@tuscomprasonline.com.ar";
// $subject = "Asunto del email";
// $message = "Mensaje". "\r\n". $mensaje;
// $headers = "From:".$email . "\r\n";

// mail($to, $subject, $message, $headers);
header("Location: index");

?>