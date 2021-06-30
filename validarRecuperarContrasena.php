<?php
session_start();
include("conectar.php");
$conexion=conectar();

$email=$_POST['email'];
$_SESSION['$error']="";

if ($email == "") {
        $_SESSION['$error'] =$_SESSION['$error']."Completar Campos";
        header('location:login.php');
      } else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
                    $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La dirección de correo es incorrecta";
                    header('location:login.php');
                  }else{
                            $buscar="SELECT email,dni,nombre FROM datos WHERE email='$email'";
                            $result=mysqli_query($conexion,$buscar)or die(mysqli_error($buscar));
                            $usuario=mysqli_fetch_array($result);
                            $filas=mysqli_num_rows($result) ;
                            if ($filas != 0) {
                              $clave=$usuario['dni'];
                              $nombre=$usuario['nombre'];
                              $titulo = "Recuperar contraseña MATEUPAS";
                              $titulo=utf8_decode($titulo);

                              utf8_decode($cabeceras = 'From:'. 'admin@mateupas.com'  . "\r\n" .
                              'Reply-To:' . 'admin@mateupas.com' . "\r\n" .
                              'X-Mailer: PHP/' . phpversion());
                              ;
                              $msjCorreo2="Estimado ".$nombre.",";
                              $msjCorreo2.= "\r\n\n";
                              $msjCorreo2.="La contraseña para ingresar a la zona Clientes es: " . $clave;
                              $msjCorreo2.= "\r\n\n";
                              $msjCorreo2.="PD: Guardar contraseña o mail para un futuro ingreso. ";
                              $msjCorreo2.= "\r\n\n";
                              $msjCorreo2.="Desde ya muchas gracias,";
                              $msjCorreo2.= "\r\n\n";
                              $msjCorreo2.="Disculpe las molestias,";
                              $msjCorreo2.= "\r\n\n";
                              $msjCorreo2.="Saludos atte,";
                              $msjCorreo2.= "\r\n\n";
                              $msjCorreo2.="Daniel O. Mateu y Pablo Mateu";
                              $msjCorreo2.= "\r\n";
                              $msjCorreo2.="Productores Asesores de Seguros";
                              $msjCorreo2=utf8_decode($msjCorreo2);
                              mail($email,$titulo ,$msjCorreo2, $cabeceras);
                              echo "<script>alert('Se le ha enviado un mail con la contraseña, chequear correo no deseado'); location.href='login.php';</script>";
                            }else {
                              $_SESSION['$error'] =$_SESSION['$error'].  "<br>Error: No se encuentra registrado";
                              header('location: recuperar.php');
                            }
                        }








?>
