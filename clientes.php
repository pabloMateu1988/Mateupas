<?php
session_start();
if (!empty($_SESSION['email']) && !empty($_SESSION['clave'])) { ?>

    <!doctype html>
    <html lang="en">
      <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Anton|Lato|Passion+One|Roboto" rel="stylesheet">
        <title>MATEUPAS</title>
        <style media="screen">
          a{
            color: #f8f9fa;
          }
          .card{
            margin-top: 10px;
          }
          #cardIndex{
            hover:none;
            text-decoration: none;
            color:black;
          }
          #container{
                margin-bottom: 100px;
          }
          .foot{
            margin-bottom:1px!important;
            margin-top:1px !important;
            border: 1px solid white;
            width: 50%
          }
          #cerrar_sesion{
            color: #212529 !important;
            text-decoration: none;
          }
        </style>
      </head>
      <body>
        <noscript>
          <div class="alert alert-danger" role="alert">
            El sitio web que estás viendo requiere para su correcto funcionamiento el uso de JavaScript, por favor habilitarlo, muchas gracias. Si no sabe cómo habilitarlo ingresar <a href="ayuda.php" class="alert-link"> aquí</a>.
          </div>
        </noscript>
        <div class="row">
          <div class="col-md-4">
              <a href="index.php"><img src="images/titulo2.png" alt=""></a>
          </div>
          <div class="col-md-4 flex-column flex-sm-row" style='text-align:center'>
            <?php if (!empty($_SESSION['email']) && !empty($_SESSION['clave'])) { ?>
                <h3>Bienvenido: <?php echo($_SESSION['nombre'])?></h3>
                <a id="cerrar_sesion" href="logout.php">Cerrar Sesión</a>
            <?php } ?>
          </div>
          <div class="col-md-4">
          </div>
        </div>
        <div class="bg-dark">
            <ul class="nav justify-content-center flex-column flex-sm-row">
              <li class="nav-item">
                <a class="nav-link active" href="login.php">Clientes</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="seguros_rivadavia.php">Seguros Rivadavia</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="sancor_seguros.php">Sancor Seguros</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="quienes_somos.php">Quiénes somos?</a>
              </li>
            </ul>
        </div>
        <div class="container" id="container">
          <div class="card-deck text-center">
            <div class="card"><a id="cardIndex" href="denuncias.php">
              <img class="card-img-top" src="images/denu.jpg" width="215px" height="315px" alt="Card image cap">
              <div class="card-footer">
                <small class="text-muted">Denuncias</small>
              </div></a>
            </div>
            <div class="card"><a id="cardIndex" href="cotizaciones.php">
              <img class="card-img-top" src="images/coti.jpg" width="215px" height="315px" alt="Card image cap">
              <div class="card-footer">
                <small class="text-muted">Cotizaciones</small>
              </div></a>
            </div>
            <div class="card"><a id="cardIndex" href="ampliacion.php">
              <img class="card-img-top" src="images/ampliacion.jpg" width="215px" height="315px" alt="Card image cap">
              <div class="card-footer">
                <small class="text-muted">Ampliación</small>
              </div></a>
            </div>
            <div class="card"><a id="cardIndex" href="reduccion.php">
              <img class="card-img-top" src="images/reduccion.jpg" width="215px" height="315px" alt="Card image cap">
              <div class="card-footer">
                <small class="text-muted">Reducción</small>
              </div></a>
            </div>
            <div class="card"><a id="cardIndex" href="anulacion.php">
              <img class="card-img-top" src="images/anulacion.jpg" width="215px" height="315px" alt="Card image cap">
              <div class="card-footer">
                <small class="text-muted">Anulación</small>
              </div></a>
            </div>
          </div>
        </div>
        <div class="text-center" style="margin: 10px">
          <a href="index.php" class="btn btn-primary btn-lg active" role="button">Volver</a>
        </div>

        <footer class="page-footer font-small" style="background-color:#212529">

            <!-- Footer Elements -->
            <div class="container">

              <!-- Grid row-->
              <div class="row">
                <div class="col-md-4" style="margin-top:20px">
                  <div class="text-center text-white">
                      <img src="images/iconos/mail.svg" alt="">
                      <hr class="foot">
                      <small>mateu.pablo@hotmail.com</small><br>
                      <small>mateupas@hotmail.com</small><br>
                      <small>admin@mateupas.com</small>
                  </div>
                </div>
                <div class="col-md-4" style="margin-top:20px">
                  <div class="text-center text-white">
                      <img src="images/iconos/location.svg" alt="">
                      <hr class="foot">
                      <small>Bs. As.</small><br>
                      <small>La Plata</small><br>
                      <small>Calle 80 N° 1281</small>
                  </div>
                </div>
                <div class="col-md-4" style="margin-top:20px">
                  <div class="text-center text-white" >
                      <img src="images/iconos/phone.svg" alt="">
                      <hr class="foot">
                      <small>221-623-4423</small><br>
                      <small>221-455-7278</small><br>
                  </div>
                </div>
              </div>
              <!-- Grid row-->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3 text-white">© 2018 Copyright:
              <a href="https://mateupas.com"> www.mateupas.com</a>
            </div>
            <!-- Copyright -->

          </footer>
      <!-- Footer -->

        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
      </body>
    </html>
  <?php }else{
    header('location:login.php');
  }
   ?>
