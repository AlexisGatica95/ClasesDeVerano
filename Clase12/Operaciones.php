<?php
// array asociativo porque NO le daba una pocision numerica de un array o vector
// ERRORES error_reporting(0); para que no me aparescan errores.

$resultado = 0;
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$operacion = $_POST['operacion'];
// suma e sel value del primer imput con name operacion

// resta e sel value del segundo imput con name operacion
if ($operacion == "suma") {
    $resultado = $numero1+$numero2;
    echo $resultado;
} else {
    $resultado = $numero1-$numero2;
    echo $resultado;
}

// array es un conjunto de datos del mismo tipo
$ensalada[1] = 'lechuga ';
$ensalada[] = 'tomate ';
$ensalada[] = 'cebolla ';
$ensalada[] = 'morron ';
$ensalada[] = 'rucula ';



// BUCLES estructuras derepeticion
// vamos a recorrer el array

// tiene 3 argumentos, INICIALIZAMOS la variable la i es para saber desde donde empezamos a contar
// el ALCANCE de mi bucle osea desde i 1 hasta que i sea 5;
// el tercer es el salto que pega mi valiable
// $i ++ aumenta uno cada vuelta
// $i = $i +1
// $i -- mi variable decrementa en uno cada vuelta
// $i = $i +2
echo " la cantidad de posiciones que tiene mi array es: ".count(
    $ensalada);

echo "<br>";

for($i = 1; $i <= 5; $i++) {
    echo $ensalada[$i];
  }

// count es una funcion propia de php
  //COUNT($ensalada) //devuelve un numero : la cntidad de elementos del array // 5
  for($i = 1; $i <= count($ensalada); $i++) {
    echo $ensalada[$i];
  }

// la funcion rand recibe dos parametros y devuelve un numero aleatorio
// la funcion count recibe solo 1 parametro y devuleve un entero
// una funcion la podemos definir en un archivo aparte y lo que hace  es ejecutar una accion determinada en el momento en el que se llame 

// permite reutilizar codigo

  $aleatorio = rand (1,200);
  echo $aleatorio;
  echo count ($ensalada);


?>

