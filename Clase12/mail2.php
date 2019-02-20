<?php
require_once ('funciones.php')
$nombreUsuario= $_POST["nombre"];
$asuntoUsuario= $_POST["asunto"]
$mensajeUsuario= $_POST["mensaje"]
$correoUsuario= $_POST]["correo"]

$resultado = enviarCorreo ($nombreUsurio,$asuntoUsuario,$mensajeUsuario,$correoUsuario);
echo $resultado;
?>