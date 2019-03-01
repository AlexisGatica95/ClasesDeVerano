<?php 
// proyecto/editar.php
// cualquier persona puede entrar acá?
session_start();

// comprobamos que la sesion esta iniciada

if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario']) && isset($_GET['idEditar']) && !empty($_GET['idEditar'])){
	require_once('funciones/conexion.php');

	// que la persona este logueada y ademas idEditar (url) este definido
	// $numeroDeSeSION = $_SESSION['idUsuario']
	$idUsuario = $_GET['idEditar'];
	$flagEdicion = 1;
	$datosUsuario = mysqli_query($conexion,"SELECT * from datos where idUsuario ='$idUsuario'") or die (mysqli_error($conexion));

	$datosFinalUsuario = mysqli_fetch_array($datosUsuario);
	// $datosFinalUsuario['nombre']
	// mysqli_fetch_array devolvia un vector con las componentes asociadas a los campos de la tabla que devolvio la consulta
	$nombre = $datosFinalUsuario['nombre'];
	$apellido = $datosFinalUsuario['apellido'];
	$correo = $datosFinalUsuario['correo'];
		
	// flag -> banderita

} else {
	header("Location:login.php");	
}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php echo "Voy a editar al usuario: ".$idUsuario; ?>
	<form method="post" action="editarusuario.php">	
		Nombre	
		<input type="text" name="nombre" required value="<?php echo $nombre; ?>">

		<br>
		Apellido
		<input type="text" name="apellido" required value="<?php echo $apellido; ?>">
		<br>
		Correo
		<input type="email" name="correo" required value="<?php echo $correo; ?>">
		<br>
		<button type="submit">Actualizar</button>
	</form>

</body>
</html>
