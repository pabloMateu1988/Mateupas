<?php
session_start();
include("conectar.php");
$conexion=conectar();


$_SESSION['$error']="";
$_SESSION['$exito']="";
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$dni = $_POST['dni'];

if ($nombre == "" or $email == "" or $dni == "") {
        $_SESSION['$error'] =$_SESSION['$error']."Completar Campos";
        header('location: registrarse.php');
}else if (!preg_match("/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/",$email)) {
		    $_SESSION['$error'] = $_SESSION['$error']. "<br>Error: La dirección de correo es incorrecta";
		    header('location: registrarse.php');
		  }else if(!preg_match("/^([0-9])*$/",$dni)){
        $_SESSION['$error'] =$_SESSION['$error'].  "<br>Error: El dni debe contener solo números";
        header('location: registrarse.php');
      }else{
        $buscar="SELECT email,dni FROM datos WHERE email='$email' OR dni='$dni'";
        $busc=mysqli_query($conexion,$buscar);
        $true=mysqli_num_rows($busc);

        if ($true!=0) {
          $_SESSION['$exito'] =$_SESSION['$exito']."Ya se encuentra registrado!";
          header('location: login.php');
        }else if($true==0){
              $nombre = ucwords(strtolower($nombre));
              $email = strtolower($email);
              $consulta="INSERT INTO datos(email, nombre, dni) VALUES ('$email','$nombre','$dni')";
              mysqli_query($conexion,$consulta);
              $_SESSION['$exito'] =$_SESSION['$exito']."Se ha registrado exitosamente!";
              utf8_decode($cabeceras = 'From:'. 'admin@mateupas.com'  . "\r\n" .
              'Reply-To:' . 'admin@mateupas.com'  . "\r\n" .
              'X-Mailer: PHP/' . phpversion());
              $msjCorreo2="Estimado ".$nombre.",";
              $msjCorreo2.= "\r\n\n";
              $msjCorreo2.= "Se ha registrado exitosamente. La contraseña para ingresar a la zona Clientes es: " .$dni ;
              $msjCorreo2.= "\r\n\n";
              $msjCorreo2.="PD: Guardar contraseña o mail para un futuro ingreso. ";
              $msjCorreo2.= "\r\n\n";
              $msjCorreo2.="Saludos atte,";
              $msjCorreo2.= "\r\n\n";
              $msjCorreo2.="Daniel O. Mateu y Pablo Mateu";
              $msjCorreo2.= "\r\n";
              $msjCorreo2.="Productores Asesores de Seguros";
              $msjCorreo2=utf8_decode($msjCorreo2);
              mail($email,"Registro exitoso en MATEUPAS" ,$msjCorreo2, $cabeceras);
              echo "<script>alert('Se ha registrado exitosamente, va a recibir un mail con la contraseña. Chequear el correo no deseado'); location.href='login.php';</script>";
            }
      }



 ?>
