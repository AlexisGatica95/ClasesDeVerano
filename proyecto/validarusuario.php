<?php 

require_once('funciones/conexion.php');
$usuario = $_POST['validar'];
$consulta = "SELECT usuario from usuarios where usuario='$usuario'";
$query = mysqli_query($conexion,$consulta) or die(mysqli_error($conexion));

if(mysqli_num_rows($query) > 0){
	echo "NO";
}