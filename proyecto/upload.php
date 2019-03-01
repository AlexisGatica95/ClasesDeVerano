<?php 
session_start();
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) { // $_SESSION array que almacena los datos de la sesion del usuario
	require_once('funciones/conexion.php');
	$imagen = $_FILES['imagen']; // imagen es el name del input

	$nombre = $_FILES['imagen']['name']; // guardamos en una variable nombre el nombre de la imagen
	$temporal = $_FILES['imagen']['tmp_name'];
	$imagenunica = "/imagenes/" .uniqid("wachi",TRUE).".jpg"; // TRUE agrega more_entropy (mas numeritos ahre)
	// cuando la ruta arranca con letras, busca esa carpeta desde la carpeta donde esta el fichero actual. si la empezas con una barra (/) es una url ABSOLUTA osea que arranca siempre desde la raiz del servidor
	$idUsuario = $_SESSION['idUsuario'];
	$resultado = move_uploaded_file($temporal, $imagenunica);
	if($resultado) { // que todo salio bien y la imagen se subio
		// vamos a actualizar la tabla usuarios ingresando en el campo foto el valor de imagenunica
		echo "Imagen subida correctamente";
		$actualizarfoto = "update usuarios set foto='$imagenunica' where id ='$idUsuario'";
		mysqli_query($conexion,$actualizarfoto) or die(mysqli_error($conexion)); //mysqli_query es la funcion que te permite ejecutar una accion en la DB. El primer argumento es la conexion a la DB y el segundo, la accion que queres llevar a cabo.
	}
} else {
	header("Location:login.php");
}
?>