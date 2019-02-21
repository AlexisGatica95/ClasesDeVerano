<?php


 $conexion= mysqli_connect("localhost","root","","gestion")or die (mysql_error($conexion));


$conexion = mysqli_connect("localhost","root","","gestion") or die("problemas al conectar a la base de datos");//no puede faltar nunca


if(isset($_POST['usuario']) && isset($_POST['password'])) {






$usuario = $_POST['usuario'];
$password = $_POST['password'];

$queryLogin = "SELECT id,usuario from usuarios where usuario='$usuario' and password='$password' ";

$resultado = mysqli_query($conexion,$queryLogin ) or die (mysqli_error ($conexion));




$numerousuarios = mysqli_num_rows($resultado);//almasena en cantidad usuarios un numero entero un 0  o un 1

if($cantidadusuarios > 0) {

//el usuario se loguea correctamente
// ACA PONGO SESSION
//$_SESSION['idUsuario'] = 'usuario'


//DE DDEVUELVE EL TIPO DE DATO QUE QUIERO MOSTRAR EN PANTALLA
//me dice que es un array y los valores, esta bueno porque nos dice que tipo de dato es.

print_r($resultado);//con esto puedo describir que tipos d edatos tiene un objeto QUIERO transformar esto en informacion tangible
//

$datosUsuario = mysqli_fetch_array($resultado);//ttrabajo con posisiones numericas y vectores asosiativos,ahora lo de prit me devuelve la INFORMACION,asocio en campo de una tabla con un valor
//la info esta DENTRO de este arrayvectores asociativos o componentes numericos, si se que nunca voy a  trabjar con columnas uso mysqli_fetch_assoc($resultado) solo puedo acceder mediante los nombres de los campos de la tabla

$_SESSION['idUsuario'] = $datosUsuario ['id']
;
$_SESSION['idUsuario'] = $datosUsuario ['0'] 

print_r($datosUsuario)

//el valor no puede ser estatico

	
    header("location:registro.php?error=OK");


} else {







$registro = mysqli_query($conexion,"INSERT INTO usuarios (usuario,password) values ('$usuario','$password') ") or die(mysqli_error($conexion));
echo "usuario registrado";



if ($registro) //osea que registro es true
{echo "el usuario".$usuario."se registro correctamente";
} else {
    echo "ocurrio un error , intente d nuevo mas tarde";
}





} 
}

?>