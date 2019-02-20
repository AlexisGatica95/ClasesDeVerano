<?php
// en este archivo voy a escribir todas las funciones de mi simplexml_import_dom
// no tiene nada de frontend

// if() es una palabra reservada que denota un condicional
// cada funcion es unica

// una funcion NUNCA se ejecuta SI NO LA LLAMO

// los parametros dentro de una funcion se separa por comas


// function sumaNumeritos($numero1.$numero2){
//     $suma = $numero+$numero2;
//     echo $suma;
//     return $suma;
//     // sirve para comunicar con el exterior el resultado de una operacion
//     // suma solo existe dentro de la funcion
//     // las funciones puede comunicarse entre si

// }

// $resultado = sumaNumeritos(10,20);
// echo $resultado;
// echo "<br>";


// la funcion recibe los parametros que necesite


function enviarcorreo($nombre,$asunto,$mensaje,$correo){
    // con isset verificamos si no es nula, y en empty si no esta vacia

    if(isset($nombre) && !empty ($nombre) && isset ($asunto) && !empty($asunto) && isset($mensaje) && !empty($mensaje) && isset ($correo)
     && isset ($correo) && !empty ($correo)){
// SIEMPRE QUE QUERRAMOS VERIFICAR ALGO EN EL SERVIDOR

    $mensajeFinal = "bienvenido: ".$nombre. " es un placer contactarte por : ".$asunto. "te estaremos enviando un correo a : ".$correo;

} else {
   
    location hace una redireccion
    header("location:formulario.php?errpr=OK")
    // $_POST->agarra info de los IMPUTS que se envien al post del servidor
    // $_GET->agarra la info de las URLs
    
}
return $mensajeFinal;
}


// la cantidad de parametros que recibe la funcion depende de lo que quiera hacer con ella

// la cantidad de parametros que recibe la funcion depende de lo que quiera hacer con ella
?>