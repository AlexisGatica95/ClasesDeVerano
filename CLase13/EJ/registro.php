<HTML>
<HEAD>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</HEAD>
<BODY>
<?php

IF(isset($_GET['error'])){
$error = $_GET['error'];
if ($error == "OK");{
$mensaje = "<h5>usuario registrado</h5>";
    }
} else {
    $mensaje = NULL;
}
?>

<div class"container">
    <div class"row">

        <DIv class"col-12">
            <form method="post" action="registrousuario.php">
            <div class="form-group">
                USUARIO:
            <input type="text" name="usuario" class="form-control">
            </div>

            <div class="form-group">
                CONTRASEÑA:
            <input type="text" name="password" class="form-control">
            </div>

            <button type="submit" class="btn btn-dark btn-block">
                registrar:
            </button>

           
            <?php
 
            echo $mensaje; ?>

            </form>
        </DIv>
    </div>

   

</div>
</BODY>
</HTML>