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

//tenemos funciones de escape asociadas con consultas,si me confundo
//VERIFICAMOS CAMPOS
$conexion = mysqli_connect("localhost","root","","gestion") or die("problemas al conectar a la base de datos");//no puede faltar nunca

// or die si no se cumpre esa funcion me sale un mesaje 


if(isset($_POST['usuario']) && isset($_POST['password'])) {




//ALMACENAR el dato en variables

$usuario = $_POST['usuario'];
$password = $_POST['password'];

//VERIFICAMOSSI EL NOMBRE ESTA REGISTRADO

//QUE PASA SI EL USUARIO YA ESTA REGISTRADO???? primero hago una consulta a mi base de datos,antes de registrarlo, la conexion es una.Usuario de la base de datos es = a $usuario ingresado
$usuariosregistrados = mysqli_query($conexion, "SELECT id,usuario from usuarios where usuario='$usuario' ") or die (mysqli_error ($conexion));
//error  detalla el error que ocurrio

//nos devuelve un entero con la cantidad de filas 
$cantidadusuarios = mysqli_num_rows($usuariosregistrados);

if($cantidadusuarios > 0) {
 //   echo "usuario existente";
    header("location:registro.php?error=OK");

//header ("location:registro.php?error=si")
//cuando el usuario existe redirigirlo a registro.php pasando como parametro en la url algo que  indique hay un error 
//refistro.php leer ese parametro por url y mostrar un mensaje en un soan con color (libre) que diga: el usuario existe
//si no hay nada en la url que no diga : undefined error  bla bla bla 
//isset y empty

} else {





// conocer en que base de datos y en que tablas vamos a MANDAR LA INFO
//siempre que queramos hacer u incert tenemos que saber como se llama la tabla y las columnas simplemente la veo


//en esta funcion puedo hacer un INSERT, UPDATE,SELECT,DELETE
//tiene 2 parametros
//1ro SIEMPRE es el LINK de coneccion
//2do consulta

$registro = mysqli_query($conexion,"INSERT INTO usuarios (usuario,password) values ('$usuario','$password') ") or die(mysqli_error($conexion));
echo "usuario registrado";



if ($registro) //osea que registro es true
{echo "el usuario".$usuario."se registro correctamente";
} else {
    echo "ocurrio un error , intente d nuevo mas tarde";
}




// mysqli_error es UNA FUNCION que nos devuelve el error exacto que estamos teniendo en la consulta


} 
}

?>