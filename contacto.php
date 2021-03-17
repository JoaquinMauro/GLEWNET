<?php
    $nombre = $_POST['nombre'];
    $zona = $_POST['zona'];
    $domicilio = $_POST['domicilio'];
    $telefono = $_POST['telefono'];
    $documento = $_POST['documento'];
    $email = $_POST['email'];
    $from = $_POST['nombre'];
    $to = "joaquin.gomez89@gmail.com";
    $consulta = $_POST['consulta']; 
    $subject = "Nueva consulta de usuario";

    $headers  = "MIME-Version: 1.0\n";
    $headers .= "Content-type: text/html; charset=utf-8\n";
    $headers .= "X-Priority: 3\n";
    $headers .= "X-MSMail-Priority: Normal\n";
    $headers .= "X-Mailer: php\n";
    $headers .= "From: \"".$nombre." \" <".$email.">\n";

    mail($to, $subject, $consulta, $headers);

    $cuerpo = "Nombre: " . $nombre;
    $cuerpo.= "Zona: " . $zona;
    $cuerpo.= "Domicilio: " . $domicilio;
    $cuerpo.= "Documento: " . $documento;
    $cuerpo.= "Email " . $email; 
    $cuerpo.= "Consulta: " . $consulta;


    // echo $subject;
    // echo "<p>Ha llegado una nueva consulta</p>";
    // echo $nombre "tiene una consulta sobre el servicio \n";
    // echo "Sus datos son los siguientes:\n";
    // echo "Telefono: " . $telefono "\n";
    // echo "Reside en" . $domicilio . "en la zona de " . $zona "\n";
    // echo "Sus puntos de contacto son: " . $telefono . " " . $email"\n";
    // echo "Su dni es" . $documento; 
// ?>