<?php
if(isset($_POST['message'])){
    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];
    // $header = 'From: ' . $mail . " \r\n";
    // $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    // $header .= "Mime-Version: 1.0 \r\n";
    // $header .= "Content-Type: text/plain";
    $header  = "MIME-Version: 1.0\n";
    $header .= "Content-type: text/html; charset=utf-8\n";
    $header .= "X-Priority: 3\n";
    $header .= "X-MSMail-Priority: Normal\n";
    $header .= "X-Mailer: php\n";
    $header .= "From: \"".$_POST['name']." \" <".$mail.">\n";
    $message = "Este mensaje fue enviado por: " . $name . " \r\n";
    $message .= "Su e-mail es: " . $mail . " \r\n";
    $message .= "Teléfono de contacto: " . $phone . " \r\n";
    $message .= "Mensaje: " . $_POST['message'] . " \r\n";
    $message .= "Enviado el: " . date('d/m/Y');
    $para = 'nataliagisellemachado@gmail.com';
    $asunto = 'Mensaje Form MateAr';
    mail( $para, $asunto, $message, $header);
    echo "$para <br>,$asunto, <br> $message, <br> $header";
}
?>