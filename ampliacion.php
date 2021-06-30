<?php
session_start();
if (!empty($_SESSION['email']) && !empty($_SESSION['clave'])) { ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/denuncias.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Lato|Passion+One|Roboto" rel="stylesheet">
    <title>MATEUPAS</title>
    <style media="screen">
      a{
        text-decoration: none;
        color: black;
      }
      a:visited{
        text-decoration: none;
        color: black;
      }
      a:link{
        text-decoration: none;
        color: black;
      }
    </style>
  </head>
  <body>
    <noscript>
      <div class="alert alert-danger" role="alert">
        El sitio web que estás viendo requiere para su correcto funcionamiento el uso de JavaScript, por favor habilitarlo, muchas gracias. Si no sabe cómo habilitarlo ingresar <a href="ayuda.php" class="alert-link"> aquí</a>.
      </div>
    </noscript>
    <div class="container">
      <div class="main">
        <form action="email/enviar_ampliacion.php" method="post">
            <div class="text-center" style="font-family:'Passion One'">
              <h1><a href="clientes.php">AMPLIACIÓN</a></h1>
            </div>
            <div class="">
              <div class="text-center">
                <label class="msjErrorCampos" style="color:red"><?php if (isset($_SESSION['$error'])) {echo $_SESSION['$error']; $_SESSION['$error']=null;}?></label> <br><br>
              </div>
              <div class="col-md-12">
                  <p class="text-center" style="margin:50px">Solicito la ampliación de cobertura de la póliza <input type="text" name="poliza" required value="" placeholder="47/xxxxxx.."style="text-align:center"> a <input type="text" class="col-4" name="cobertura" value=""placeholder="Ingresar cobertura.." style="text-align:center"> correspondiente al vehículo con dominio
                    <input type="text" name="patente" value="" style="text-align:center" placeholder="AA999BB/789AAA">
                    a partir del día <input type="text" name="fecha" value="" placeholder="Ingresar dd/mm/aaaa.."style="text-align:center"> .</p>
              </div>
              <div class="container">
                  <div class="row">
                    <div class="col-sm">
                    </div>
                    <div class="col-sm">
                      <div class="text-center">
                        <input type="text" class="col-auto" name="nombre" value="" style="text-align:center"><br>
                        <label for="">Apellido y Nombre</label>
                      </div>
                      <div class="text-center">
                        <input type="text" class="col-auto" name="dni" value="" style="text-align:center"><br>
                        <label for="">DNI</label>
                      </div>
                      <div class="text-center">
                        <input type="text" class="col-auto" name="email" value="" style="text-align:center"><br>
                        <label for="">E-Mail</label>
                      </div>
                    </div>
                    <div class="col-sm">
                    </div>
                  </div>
                </div>

            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-primary btn-lg" type="submit">Enviar Suplemento</button>
          </div>
      </form>
      <div class="text-center" style="margin: 10px">
        <a href="clientes.php" class="btn btn-primary btn-sm active" role="button">Volver</a>
      </div>

    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones.js"></script>
  </body>
</html>
<?php }else {
          header('location:login.php');
} ?>
