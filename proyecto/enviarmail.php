<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
// enviarmail.php
// es enviar un mail estatico
// enviarle un mail al usuario que diga : cablevision te informa que tu factura....
$to = "pepito@servidor.com.ar";
$subject = "CONTACTO CABLEVISION";
$text = "Querido pepito, te iformamos que te aumentaremos el plan porque sos ... ";
mail($to,$subject,$text);


?>
</body>
</html>