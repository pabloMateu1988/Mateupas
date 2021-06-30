<?php
session_start();
$_SESSION['$error']="";
$mail= 'admin@mateupas.com';
$validar=$_POST['validar'];
$para      = 'admin@mateupas.com';

$titulo2 = 'Cotización solicitada';
$titulo2 = utf8_decode($titulo2);

if ($validar == '1') {
  $precioAccesorio="";
  $precioGnc="";
  $nombre=$_POST['nombre'];
  $tel=$_POST['telefono'];
  $email=$_POST['email'];
  $marca=$_POST['marca'];
  $modelo=$_POST['modelo'];
  $ano=$_POST['ano'];
  $combustible=$_POST['combustible'];
  $poseeGnc=$_POST['gnc'];
  if ($poseeGnc == 'si') {
    $precioGnc=$_POST['precio_gnc'];
  }
  $posseAccesorios=$_POST['accesorios'];
  if ($posseAccesorios == 'si') {
    $precioAccesorio=$_POST['precio_accesorio'];
  }
}else if ($validar == '2') {
          $nombre=$_POST['nombre'];
          $tel=$_POST['telefono'];
          $email=$_POST['email'];
          $marca=$_POST['marca'];
          $modelo=$_POST['modelo'];
          $ano=$_POST['ano'];
        }else if ($validar == '3') {
                  $nombre=$_POST['nombre'];
                  $tel=$_POST['telefono'];
                  $email=$_POST['email'];
                  $provincia=$_POST['provincia'];
                  $localidad=$_POST['localidad'];
                  $cp=$_POST['cp'];
                  $metros=$_POST['metros'];
                  $plantas=$_POST['plantas'];
                  $construccion=$_POST['tipo_construccion'];
                  $alarma=$_POST['alarma'];
                  $rejas=$_POST['rejas'];
                  $disyuntor=$_POST['disyuntor'];
                  $muro=$_POST['muro'];
        }

if ($validar == '1') {
  if ($nombre == "" or $tel == "" or $email == "" or $marca == "" or $modelo == "" or $ano == "" or $combustible == "" or $poseeGnc == "" or $posseAccesorios == "") {
          $_SESSION['$error'] =$_SESSION['$error']."Completar Campos";
          header('location:https://mateupas.com/cotizaciones.php');
  }else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
  		    $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La dirección de correo es incorrecta";
  		    header('location:https://mateupas.com/cotizaciones.php');
  		  }else {
              $msjAuto="Apellido y Nombre solicitante: " .$nombre;
              $msjAuto.= "\r\n\n";
              $msjAuto.="Teléfono: ".$tel;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Email: ".$email;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Marca: ".$marca;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Modelo: ".$modelo;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Año: ".$ano;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Tipo combustible: ".$combustible;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Posee GNC?: ".$poseeGnc;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Precio Equipo GNC: ".$precioGnc;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Posee Accesorios?: ".$posseAccesorios;
              $msjAuto.= "\r\n\n";
              $msjAuto.= "Precio y Accesorios: ".$precioAccesorio;
              $msjAuto.= "\r\n\n";

              $msjAuto = utf8_decode($msjAuto);
              $titulo    = 'Cotización Auto';
              $titulo = utf8_decode($titulo);

              utf8_decode($cabeceras = 'From:'. $email  . "\r\n" .
              'Reply-To:' . $email . "\r\n" .
              'X-Mailer: PHP/' . phpversion());

              utf8_decode($cabeceras2 = 'From:'. $mail . "\r\n" .
                'Reply-To:' . $mail . "\r\n" .
                'X-Mailer: PHP/' . phpversion());

              if (mail($para, $titulo,$msjAuto, $cabeceras)) {
                  mail($_POST['email'],$titulo2, $msjAuto,$cabeceras2);
                  echo "<script>alert('El formulario ha sido enviado, va a recibir un mail de confirmación'); location.href='https://mateupas.com/clientes.php';</script>";
                } else {
                     echo "<script>alert('Hubo un error, volver a enviar el formulario'); location.href='http://https://mateupas.com/cotizaciones.php';</script>";
                }
              }
}else if ($validar == '2') {
          if ($nombre == "" or $tel == "" or $email == "" or $marca == "" or $modelo == "" or $ano == "") {
                  $_SESSION['$error'] =$_SESSION['$error']."Completar Campos";
                  header('location:https://mateupas.com/cotizaciones.php');
          }else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
                  $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La dirección de correo es incorrecta";
                  header('location:https://mateupas.com/cotizaciones.php');
                }else {
                        $msjMoto="Apellido y Nombre solicitante: " .$nombre;
                        $msjMoto.= "\r\n\n";
                        $msjMoto.="Teléfono: ".$tel;
                        $msjMoto.= "\r\n\n";
                        $msjMoto.= "Email: ".$email;
                        $msjMoto.= "\r\n\n";
                        $msjMoto.= "Marca: ".$marca;
                        $msjMoto.= "\r\n\n";
                        $msjMoto.= "Modelo: ".$modelo;
                        $msjMoto.= "\r\n\n";
                        $msjMoto.= "Año: ".$ano;
                        $msjMoto.= "\r\n\n";


                        $msjMoto = utf8_decode($msjMoto);
                        $titulo    = 'Cotización Moto';
                        $titulo = utf8_decode($titulo);

                        utf8_decode($cabeceras = 'From:'. $email  . "\r\n" .
                        'Reply-To:' . $email . "\r\n" .
                        'X-Mailer: PHP/' . phpversion());

                        utf8_decode($cabeceras2 = 'From:'. $mail . "\r\n" .
                          'Reply-To:' . $mail . "\r\n" .
                          'X-Mailer: PHP/' . phpversion());

                        if (mail($para, $titulo,$msjMoto, $cabeceras)) {
                            mail($_POST['email'],$titulo2, $msjMoto,$cabeceras2);
                            echo "<script>alert('El formulario ha sido enviado, va a recibir un mail de confirmación'); location.href='https://mateupas.com/clientes.php';</script>";
                        } else {
                             echo "<script>alert('Hubo un error, volver a enviar el formulario'); location.href='https://mateupas.com/cotizaciones.php';</script>";
                        }
                      }

          }else if ($validar == '3') {
                      if ($nombre == "" or $tel == "" or $email == "" or $provincia == "" or $localidad == "" or $metros == "" or $plantas == "" or $construccion == "" or $alarma == "" or $disyuntor == ""
                      or $rejas == "" or $muro == "") {
                              $_SESSION['$error'] =$_SESSION['$error']."Completar Campos";
                              header('location:https://mateupas.com/cotizaciones.php');
                      }else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
                              $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La dirección de correo es incorrecta";
                              header('location:https://mateupas.com/cotizaciones.php');
                            }else {
                                $msjHogar="Apellido y Nombre solicitante: " .$nombre;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.="Teléfono: ".$tel;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Email: ".$email;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Provincia: ".$provincia;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Localidad: ".$localidad;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "M2 cubiertos: ".$metros;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Cantidad de plantas: ".$plantas;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Tipo de construcción: ".$construccion;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Alarma: ".$alarma;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Rejas: ".$rejas;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Disyuntor: ".$disyuntor;
                                $msjHogar.= "\r\n\n";
                                $msjHogar.= "Tiene muro, cerco y/o rejas de menos de 1,80 mts. y linda con terreno baldío u obra en construcción?: ".$muro;
                                $msjHogar.= "\r\n\n";


                                $msjHogar = utf8_decode($msjHogar);
                                $titulo    = 'Cotización Hogar';
                                $titulo = utf8_decode($titulo);

                                utf8_decode($cabeceras = 'From:'. $email  . "\r\n" .
                                'Reply-To:' . $email . "\r\n" .
                                'X-Mailer: PHP/' . phpversion());

                                utf8_decode($cabeceras2 = 'From:'. $mail . "\r\n" .
                                  'Reply-To:' . $mail . "\r\n" .
                                  'X-Mailer: PHP/' . phpversion());



                                if (mail($para, $titulo,$msjHogar, $cabeceras)) {
                                      mail($_POST['email'],$titulo2, $msjHogar,$cabeceras2);
                                      echo "<script>alert('El formulario ha sido enviado, va a recibir un mail de confirmación'); location.href='https://mateupas.com/clientes.php';</script>";
                                } else {
                                     echo "<script>alert('Hubo un error, volver a enviar el formulario'); location.href='https://mateupas.com/cotizaciones.php';</script>";
                                }

                              }

                    }








?>
