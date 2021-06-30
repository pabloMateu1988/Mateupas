<?php
session_start();
$email=$_POST['email'];
$clave=$_POST['clave'];
$_SESSION['$error']="";



include("conectar.php");
$conexion=conectar();

$buscar="SELECT email,nombre,dni FROM datos WHERE email='$email' AND dni='$clave'";
$result=mysqli_query($conexion,$buscar)or die(mysqli_error($buscar));
$usuario=mysqli_fetch_array($result);
$filas=mysqli_num_rows($result) ;
if ($filas != 0) {
      $_SESSION['clave'] = $clave;
      $_SESSION['email'] = $email;
      $_SESSION['nombre'] = $usuario['nombre'];
      header('location:clientes.php');
}else if ($email == "" AND $clave == "") {
        $_SESSION['$error'] =$_SESSION['$error']."Completar Campos";
        header('location:login.php');
      }else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
                    $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La dirección de correo es incorrecta";
                    header('location:login.php');
                  }else{
                          $buscar="SELECT email FROM datos WHERE email='$email'";
                          $result=mysqli_query($conexion,$buscar)or die(mysqli_error($buscar));
                          $usuario=mysqli_num_rows($result);
                          if ($usuario == 0) {
                            $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: No se encuentra registrado, por favor registrarse haciendo click en el botón verde";
                            header('location:login.php');
                          }else if (!preg_match("/^([0-9])*$/",$clave) || ($usuario['clave'] != $clave)) {
                            $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La clave es incorrecta";
                            header('location:login.php');
                          }}



 ?>
