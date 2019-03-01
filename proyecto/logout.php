<?php 
session_start();
// proyecto/logout.php
// Cerrar la sesion del usuario! 

// todas las funciones de sesion estan inicializadas en session_start(); 

session_destroy();
// Puedo tener mas de una sesion
header("Location:login.php");

// session_destroy(); borrar todas las sesiones existentes
// finalizar compra: 
// session_destroy($_SESSION['compras']);


?>