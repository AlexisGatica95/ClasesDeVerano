<html>

    <head>

    </head>
    <body>
<?php
$error = $_GET['ejemplodeerror'];
if ($error == "OK");
$mensaje = "datos incorrectos"

?>
    <form method="post" action="mail.php">
        <input type="text" name="nombre">
        <input type="text" name="asunto">
       
        <input type="text" name="mesaje">
        <input type="text" name="correo">
        <button type="submit">enviar</button>
        <span style="background:tomato; color:white;">
            <?php

            echo $mensaje; ?>

<!-- lo que tengo que hacer en este archivo es analizar la url -->



    </form>
    
     </body>
</html>