<?php

session_start ();
 //el usuario solo va a poder visitar este sitio si esta logeado
 //comprovamos si una variable esta definida con isset
 //si no esta definida la variable de sesion: nunca inicio sesion
//como hacemos  para que solo los que s eregistraon entren

if(isset($_SESSION['idUsuario']) && ! empty($_SESSION['idUsuario'])) //verifico que la variable de sesion tenga algo adentro
{
require_once('funciones/conexion.php');//para poder llamar la consulta


//creo una variable en lugar de siempre escribir session etc.
//si logeo con un usuario existente  se crea una variable  de sesion llamada idUsuarion y se asigna el numero de id correspondiente al id de la tabla usuarios


$id = $_SESSION['idUsuario'];
$queryUsuarios = "SELECT * from usuarios";//me muestra todos los usuarios

} else {
	header ("Location:Login.php"); //si no esta registrado me redirige al log in
}
?>
<html>
	<head>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	</head>
<body>


<div class="container">
<div class="row">

	 <a href="">Cerrar sesion</a>

</div>

<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Usuario</th>
      <th scope="col">Contraseña</th>
      
    </tr>
  
  </thead>
  <tbody>//hago una consulta que me muestre todo
<?php
	$consulta = mysqli_query($conexion,$queryUsuarios) or die (mysqli_error($conexion));//tengo que ejecutar la consulta, se guarda toda la info de la tabla
	//como transformo este objeto en algo que entendamos, con un fetch_array
	// $datos = mysqli_fetch_array($consulta);//esta toda la data



while($info =  mysqli_fetch_array($consulta) ){
	//info['id']
	// info['usuario']
	// info['password']



//cuando se ejecuta esto?, mientras la condicion del bucle se cumpla(true) se va a ejecutar ese bucle,tengo que implementar el fetch en una estructura repetitiva para poder inprimir todos los usuarios


?>

    <tr>
      <td><?php echo $info['id']; ?></td>
      <td><?php echo $info['usuario']; ?></td>
      <td><?php echo $info['password']; ?></td>
    </tr>


<?php
}

// cierro aca asi no tengo que escribir un echo en todos lados

//hay algoritmos como md5, sha1, son irreversibles
//las bases de datos tienen que tener una minima seguridad 


?>  

  </tbody>
</table>

</div>	



</body>


</html>