<?php
session_start();//para que no se salga la sesion


//ademas de verificar si la sesion esta definioda
if(isset($_SESSION['idUsuario']) && !empty($_SESSION['idUsuario'])) {
require_once('funciones/conexion.php');
//EL ULTIMO ARRAY ASOCIATIVO    
//$_FILES

$imagen = $_FILES['imagen']; //el name del imput

print_r($imagen);//imprime el mime 

 
//movemos la imagen que se guarda en un fichero temporal a una carpeta de nuestro servidor
//para eso usamos la funcion temporaria y movemos la imagen a una ruta especifica

$nombre = $_FILES['imagen']['name']; //guardamos en una variable el nombre de la imagen
$nombreMIN ="imagenes/".strtolower($nombre); //convierte un string a minusculas

//podemos aplicar funciones de cadenas unicas 

$temporal = $_FILES['imagen']['tmp_name'];
//$resultado = move_uploaded_file ($temporal, $nombreMIN); //de la pocision inicial a mi carpeta inicial


$imagenunica ="imagenes/" .uniqid ("wachi",TRUE).".jpg";//puede tener varios parametro
$idUsuario =$_SESSION['idUsuario'];
$resultado =move_uploaded_file($temporal, $imagenunica);

$idUsuario = $_SESSION['idUsuario'];
    echo "imagen subida correctamente";
//vamos a actualizar el campo fotos de la tabla usuarios el valor de imagen unica
 $actualizarfoto = "update usuarios set foto='$imagenunica' where id ='$idUsuario'";
 mysqli_query($conexion,$actualizarfoto) or die(mysqli_error ($conexion));


} else {
    header("Location:login.php");
}


?>