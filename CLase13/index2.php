<?php
//usuario, password
// verificamos si las variables estan definidas 

// PRIMERO creo una VARIABLE DE CONEXION
// ESCRIBO mysql u- root -p

// PHP necesita hacer lo mismo pero lo hace con function_exists

// en este caso es my local host(en un hosting nos da una URL o una IP),como segundo parametro es USUARIO en windows es root,contraseña de root
// y por untimo la base de datos

//para no poner conexion en todas las paginas creo un archivo que se llame conexion.php
//la llamo en require_once('conexion.php')

//NO OLVIDAR NUNCA mysqlI_connet

//tenemos funciones de escape asociadas con consultas,si me confundi
$conexion = mysqli_connect("localhost","root","","gestion") or die("problemas al conectar a la base de datos");

// or die si no se cumpre esa funcion me sale un mesaje 


if(isset ($_POST['usuario']) && isset($_POST['password'])) {


//ALMACENAR el dato en variables

$usuario = $_POST['usuario'];
$password = $_POST ['password'];

// conocer en que base de datos y en que tablas vamos a MANDAR LA INFO
//siempre que queramos hacer u incert tenemos que saber como se llama la tabla y las columnas simplemente la veo


//en esta funcion puedo hacer un INSERT, UPDATE,SELECT,DELETE
//tiene 2 parametros
//1ro SIEMPRE es el LINK de coneccion
//2do consulta

myqli_qwery($conexion,"INSERT into usuarios (usuario,password) values ('$usuario','$password')") or die(mysqli_error($conexion));



// mysqli_error es UNA FUNCION que nos devuelve el error exacto que estamos teniendo en la consulta


}


?>