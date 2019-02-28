<?php
//primero si queremos usar la base de datos llamamos la conexion

require_once('funciones/conexion.php')

//$nombreLibro = $_POST['']

$libro = $_POST['libro'];

$consulta ="SELECT * from libros where libro LIKE '%libro%'";

//conecta y le paso la consulta or die para ver si ocasionaba un eror la consulta
$query = mysqli_query($conexion,$consulta) or die (mysqli_error($conexion));

//para recorrer 
if(mysqli_num_rows ($query)>0){
?>
<table>
	<thead>
		<th>Nombre</th>
	    <th>Precio</th>
	</thead>

	<tbody>
		
			<?php while($libros = mysqli_fetch_array($query)){ ?>
		<tr>
			<td><?php echo $libros['nombre']; ?></td>
			<td><?php echo $libros['precio']; ?></td>
		</tr>
	<?php } ?>
	
	</tbody>

</table>

<?php
} else {
	echo "no hay resultados";
}

//como vinculo la informacion del usuario con la consulta que hizo
?>