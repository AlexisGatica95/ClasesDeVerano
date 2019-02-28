<?php
session_start();

if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) {


require_once('funciones/conexion.php');
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$correo = $_POST['correo'];

// verificar si no esta vacio ningun campo

$consulta = "UPDATE datos set nombre='$nombre',apellido='$apellido',correo='$correo' where id_usuario='idUsuario'";

mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

echo "datos actualizados correctamente";

// hacemos un quieri,definimos conexion al princio

//el where es una restriccion

} else {
 header(location.php);
}


?>