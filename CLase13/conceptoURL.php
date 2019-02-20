<?php
// POST,GET,PUT,DELETE

// URL

// http://localhost/alexiophp/Alexio/CLase13/conceptoURL.php?nombre=alexio&apellido=atun

$variable = "lalalal";

echo "bienvenido". $variable;
if (isset($_GET['nombre']) && ! empty ($_GET['nombre']) && isset ($_GET['apellido']) && ! empty ($_GET['apellido'])){

$nombre = $_GET['nombre'];
$apellido = $_GET['apellido'];    
} else {
    // este caso la url esta incompleta y no este definida , le doy un valor x a mis variables

    // header location:jasdkñjasd POR EJEMPLO ACA SI NO ESTA DEFINIDA ME MANDA A OTRA URL
    
    $nombre= "";
    $apellido = "";
}
echo "<br>";
echo $nombre;
echo "<br>";
echo $apellido;




// si no aparecen las variables en la URL va a salir error,si nos sale el error usamos isset, empety

//BUCLES

for($i = 0; $i<=10 ; $i+2){
    echo $i."<br>"
}

//este bucle se ejecuta MIENTRAS se cumpla la condicion del parentesis
//le digo a DIFERENCIA de mi FOR en mi condicion
$f
while ($f <= 10) {
   echo $f;
   $f++;
}

?>