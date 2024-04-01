<?php

$nombre = $_POST['nombre'];
$email = $_POST['correo'];
$pais = $_POST['pais'];
$tipoSolicitud = $_POST['rol'];
$spam = $_POST['opcion'];

$mensaje = "Este mensahe fue enviado por " . $nombre . " originari@ de: ". $pais .
" que tiene el email: " . $email . ", esta interado en el plan de " .  $tipoSolicitud . ", " . 
$spam . "quiere recibir informacion";

$destinatario = 'sofmendieta.06@gmail.com';
$asunto = 'Interesados en EduHousing';

mail($destinatario, $asunto, utf8_decode($mensaje), $header);

header('Location:exito.html')

?>