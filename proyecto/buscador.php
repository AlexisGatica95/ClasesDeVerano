<?php 

// buscador.php
require_once('funciones/conexion.php');
// $conexion
// $nombreLibro = $_POST['']; PENDIENTE PARA DESPUES
$libro = $_POST['libro'];
$consulta = "SELECT * from libros where titulo LIKE '%$libro%'";
$query = mysqli_query($conexion,$consulta) or die(mysqli_error($conexion)); // ver si ocasionaba algun error la consulta


// mysqli_connect(); conexion a la base de datos
// mysqli_query() cualquier consulta (CRUD)
// mysqli_num_rows($query) --> 3 CUENTA CANTIDA DDE REGISTRO DEVUELTOS POR QUERY
// mysqli_fetch_array() TRANSFORMA UN OBJETO RESULT DE SQL EN UN ARRAY ASOCIATIVO O INDEXADO
if(mysqli_num_rows($query) > 0) {
	


?>

	<table class="table">
	
		<thead>
			<th>Nombre</th>
			<th> Precio </th>
		</thead>

		<tbody>
			<?php while($libros = mysqli_fetch_array($query)){ ?>
			<tr>
				<td><?php echo $libros['titulo']; ?> </td>
				<td> <?php echo $libros['precio']; ?></td>
			</tr>
		<?php } ?>
		</tbody>

	</table>

<?php 
} else {
	echo "No hay resultados disponibles";
}
?>