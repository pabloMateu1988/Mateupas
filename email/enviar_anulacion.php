<?php

session_start();
$_SESSION['$error']="";
$fecha = $_POST['fecha'];
$poliza = $_POST['poliza'];
$patente = $_POST['patente'];
$nombre = $_POST['nombre'];
$dni = $_POST['dni'];
$email = $_POST['email'];

if ($nombre == "" or $fecha == "" or $poliza == "" or $patente == "" or $dni == "" or $email == "") {
        $_SESSION['$error'] =$_SESSION['$error']."Completar Campos";
        header('location:https://mateupas.com/anulacion.php');
}else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
		    $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La dirección de correo es incorrecta";
		    header('location:https://mateupas.com/anulacion.php');
		  }else {
            $msjCorreo= "Solicito la anulación de cobertura de la póliza número " . $poliza . " correspondiente al vehículo con dominio " . $patente . " a partir del día " . $fecha . " .

                                                  Apellido y Nombre:
                                                  "         . $nombre.  "

                                                    DNI:
                                                  ".$dni. "";

                $msjCorreo2 = "El suplemento ha sido recibido con el siguiente mensaje:";
                $msjCorreo2.= "\r\n\n";
                $msjCorreo2.= "Solicito la anulación de cobertura de la póliza número " . $poliza . " correspondiente al vehículo con dominio " . $patente . " a partir del día " . $fecha . " .

                                                      Apellido y Nombre:
                                                      "         . $nombre.  "

                                                        DNI:
                                                      ".$dni. "";
                $msjCorreo2.= "\r\n\n";
                $msjCorreo2.="PD: Por favor, responder el siguiente mail indicando que le llegó.";
                $msjCorreo2.= "\r\n\n";
                $msjCorreo2.="Disculpe las molesitas,";
                $msjCorreo2.= "\r\n\n";
                $msjCorreo2.="Saludos atte,";
                $msjCorreo2.= "\r\n\n";
                $msjCorreo2.="Daniel O. Mateu y Pablo Mateu";
                $msjCorreo2.= "\r\n";
                $msjCorreo2.="Productores Asesores de Seguros";

            $para      = 'admin@mateupas.com';
            $titulo    = 'Suplemento de anulación';
            $titulo=utf8_decode($titulo);
            utf8_decode($cabeceras = 'From:'. $email  . "\r\n" .
            'Reply-To:' . $email . "\r\n" .
            'X-Mailer: PHP/' . phpversion());

            utf8_decode($cabeceras2 = 'From:'. $para . "\r\n" .
            	'Reply-To:' . $para . "\r\n" .
            	'X-Mailer: PHP/' . phpversion());

            $msjCorreo = utf8_decode($msjCorreo);

            if (mail($para, $titulo,$msjCorreo, $cabeceras)) {
                  mail($_POST['email'],$titulo, $msjCorreo2,$cabeceras2);
                  echo "<script>alert('El formulario ha sido enviado, va a recibir un mail de confirmación. Por favor remitir que el mail de confirmación le ha llegado, muchas gracias. '); location.href='https://mateupas.com/clientes.php';</script>";
            } else {
                  echo "<script>alert('Hubo un error, volver a enviar el formulario'); location.href='https://mateupas.com/anulacion.php';</script>";
            }

            }


?>
