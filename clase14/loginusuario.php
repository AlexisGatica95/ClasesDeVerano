<?php
//tenemos 3 formas de incluir archivos a partir de php7 se recomienda a usar 

session_start();//siempre que quiera que el usuario no se deslogee de una pagina



require_once('funciones/conexion.php');

 //almaseno en variables la info que llega de log in php
//pongo los names de los inputs

$usuario = $_POST['usuario'];
$password = $_POST['password']; //le pongo md5 adelante para que se encripte

//2.verificacion con isser y empty , lo vamos a hacer al final con el profe

//VARIABLE SUPERGLOBAL
//la podemos pasar de pagina a pagina, en facebook por ejemplo amntiene nuestra señal activa en todas nuestras paginas.

//cookies -> se guardan datos/ archivos de navegacion
//desdventaja de usuar cookies-> los datos se guardan en el navegador.
//los DATOS, TARJETAS , CONTRASEÑAS (end of thinking capacity)  se guardan en el SERVIDOR de manera encriptada

//PHP tiene su propia variable de sesion y un array asosiativo llamado $_SESSION[]

//DONDE LE CREO LA SESION A LA PERSONA, en donde se registro correctamente?? en el IF

if(isset($usuario) && !empty($usuario) && isset($password) && !empty($password)) {




$queryLogin = "SELECT id,usuario from usuarios where usuario='$usuario' and password='$password' ";

$resultado = mysqli_query($conexion,$queryLogin) or die (mysqli_error($conexion));




$numerousuarios = mysqli_num_rows($resultado);//almasena en cantidad usuarios un numero entero un 0  o un 1

if($numerousuarios > 0) {

	//el usuario se loguea correctamente
	// ACA PONGO SESSION
	//$_SESSION['idUsuario'] = 'usuario'


	//DE DDEVUELVE EL TIPO DE DATO QUE QUIERO MOSTRAR EN PANTALLA
	//me dice que es un array y los valores, esta bueno porque nos dice que tipo de dato es.

	// print_r($resultado);//con esto puedo describir que tipos d edatos tiene un objeto QUIERO transformar esto en informacion tangible
	//

	$datosUsuario = mysqli_fetch_array($resultado);//ttrabajo con posisiones numericas y vectores asosiativos,ahora lo de prit me devuelve la INFORMACION,asocio en campo de una tabla con un valor
	//la info esta DENTRO de este arrayvectores asociativos o componentes numericos, si se que nunca voy a  trabjar con columnas uso mysqli_fetch_assoc($resultado) solo puedo acceder mediante los nombres de los campos de la tabla

	$_SESSION['idUsuario'] = $datosUsuario['id'];
	//  or $_SESSION['idUsuario'] = $datosUsuario ['0'] ;


	header("Location:inde2.php");
		
	//una vez creada la sesion llamada id Usuarion que tiene el valor unico del id de l usuario que s elogeo vamos a redirigir a  la persona a index2.php y ahi vamos a hacer una tabla que muestren todos los usuarios que existen en el sistema

	// print_r($datosUsuario);

//el valor no puede ser estatico


} else {
	echo "incorrecto";
	// usuarion o contraseña incorrecto
}

}
?>