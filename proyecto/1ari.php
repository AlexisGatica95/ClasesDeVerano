 <?php
require_once('funciones/conexion.php'); // conectamos a la DB

$librosbaratos =" SELECT * from libros where precio<500 "; //Creamos consulta y la guardamos en una variable
 
$resultado = mysqli_query ($conexion,$librosbaratos) or die(mysqli_error($conexion)); // con funcion mysqli_query, ejecutamos esa consulta usando la conexion a la DB y la variable con la consulta que creamos (y si hay error, cortamos y mostramos el error)

$listalibros = mysqli_fetch_all($resultado); // con la funcion mysqli_fetch_all, tomamos el resultado de esa consulta que ejecutamos y la convertimos en un array de arrays de php 

//print_r($listalibros);


 ?>
 <!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
 
 <table class="table">
 <thead>
 	<th> id libro</th>
 	<th> nombre</th>
 	<th> precio</th>
 </thead>
	<tbody>
<?php  
		foreach ($listalibros as $libro) { // foreach loopea un array y aplica el codigo entre las llaves para cada elemento de ese array hasta que se acaben. el primer argumento es el array y el segundo (as $blbla) es el nombre que le damos a el elemento del array que estamos trabajando en esa vuelta.
	echo "<tr>
			<td>". $libro[0] ."</td>
			<td>". $libro [1] ."</td>
			<td>". $libro [2] ."</td>
		</tr>";
}

?>
		
	</tbody>
 </table>


</body>
</html>