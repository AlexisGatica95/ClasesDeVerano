<?php
// editar.php -> actualizar al usuario :D
// editarusuario.php
session_start();
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) {
	// verificar si no esta vacio ninguno de los campos
	// isset, empty
	// consulta update
	$idUsuario = $_SESSION['idUsuario'];
	require_once('funciones/conexion.php');
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$correo = $_POST['correo'];

	$consulta = "UPDATE datos set nombre='$nombre',apellido='$apellido',correo='$correo' where idUsuario='$idUsuario'";
	// conectar a SQL con PHP
	 mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));
	 echo "<a href='/index.php'><button class='btn btn-link'> Ver perfil </button></a>";
	 // header("Location:index.php")


} else {
	header("Location:login.php");
}

?>