<?php
$nombre = $_POST["nombre"];
$CodArea =$_POST["CodArea"];
$celular =$_POST["celular"];
$email = $_POST["email"];
$consulta = $_POST["textarea"];

$mensaje = "Mensaje de ". $nombre. ",\r\n";
$mensaje = "telefono ". $CodArea . " ". $celular. ",\r\n";
$mensaje = "Email ". $email. ",\r\n";
$mensaje = "Mensaje: " . $consulta. ",\r\n";
$mensaje = "Enviado el  ". date('d/m/Y' , time());

$para = 'cuevatomass02@gmail.com';
$asunto = "Email enviado desde la web";

mail($para, $asunto, utf8_decode($mensaje),$header);

header('Location:../pages/enviado.html');



?> 