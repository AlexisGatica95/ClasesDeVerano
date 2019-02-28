<body>
    <?php
session_start();

//enviar un mail.php
    //envia un mail al usuario que diga :hi gggg
$id = $_GET['id'];
require_once('funciones/conexion.php');
$info = mysqli_query($conexion,"select nombre,correo from datos where id_usuario='$id'") or die(mysqli_error($conexion));
$infoUsuarios = mysqli_fetch_array($info);
$to = $infoUsuarios['correo'];
$subject = "contatco cabkevioon";
$text = "querido".$infoUsuarios['nombre']." , te informamos que te aaskdlaksdlkasdk" ;

mail($to,$subject,$text);




    ?>
</body>