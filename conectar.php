<?php
function conectar(){
  $conexion = mysqli_connect('127.0.0.1','root','','257918_datos');
  if (!$conexion) {
    echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
    echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
    exit;
  }

  return $conexion;

}


?>
