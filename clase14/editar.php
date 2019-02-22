<?php 
session_start();

if (isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario']) && isset ($_GET['idEditar']) && !empty($_GET['idEditar'])) {

require_once('funciones/conexion.php');//solo llamo a esta funcion si se cumple esta condicionm

$idUsuario = $_GET['idEditar'];
$flagEdicion = 1; //
$datosUsuario =	mysqli_query($conexion, "SELECT * from datos where id_usuario = '$idUsuario'") or die (mysqli_error($conexion));
//solo tengo que traer informacion es un SELECT

$datosFinalUsuario = mysqli_fetch_array ($datosUsuario); //array devuelve un vector  con los nombres de las tablas 

$nombre = $datosFinalUsuario['nombre'];//'nombre' es la columna de la tabla
$apellido = $datosFinalUsuario['apellido'];

$correo = $datosFinalUsuario ['correo'];
} else {

header("Location:login.php");

}
?>



<html>
 <head>
 	

 </head>
<body>
	

 	<?php echo "voy a editar al usuario; ".$idUsuario; ?>

 	<form  method="post" action="editarusuario.php">
		
		Nombre
 		<input type="text" name="nombre" value="<?php echo $nombre; ?>" >
		
		<br>
 		
 		Apellido
 		<input type="text" name="apellido" value="<?php echo $apellido; ?>" >
		
		<br>
 		<input type="text" name="correo"value="<?php echo $correo; ?>" >


		Correo
 		<button type="submit"> Actualizar</button>
 		<br>

 	</form>

</body>

</html>