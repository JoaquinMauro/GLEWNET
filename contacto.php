<?php

    $nombre = $_POST['nombre'];
    $zona = $_POST['zona'];
    $domicilio = $_POST['domicilio'];
    $telefono = $_POST['telefono'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $from = $_POST['nombre'];
    $to = "glewnet.servicio@gmail.com";
    $consulta = $_POST['consulta']; 
    $subject = "Nueva consulta de usuario";
    $linkedin = $_POST['linkedin'];

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$nombre." \" <".$email.">\n";

    $message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
    
    $message .= "Reside en: " . $domicilio . "," . $zona . " \r\n";
    $message .= "Su e-mail es: " . $email . " \r\n";
    $message .= "Teléfono de contacto: " . $telefono . " \r\n";
    $message .= "Mensaje: " . $_POST['consulta'] . " \r\n";
    $message .= "Su enlace a Linkedin es: " . $_POST['linkedin'] . " \r\n";
    $para = 'glewnet.servicio@gmail.com';
    $asunto = 'Nueva consulta de usuario';

    mail( $para, $asunto, $message, $header);
    echo "$para <br>,$asunto, <br> $message, <br> $header";
    
    header("Location: http://glewnet.com.ar/pages/contacto.html");
exit();

    
?>