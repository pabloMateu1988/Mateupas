<?php session_start(); ?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Anton|Lato|Passion+One|Roboto" rel="stylesheet">
    <link rel="shortcut icon" href="images/titulo2.ico" />
    <title>MATEUPAS</title>
    <style media="screen">
      a{
        color: #f8f9fa;
      }
      .card{
        margin-top: 10px;
        border-radius: 20px;
      }
      .card-img-top{
        border-top-left-radius: 20px;
        border-top-right-radius: 20px;
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
      .jumbotron{background-image: url(images/hogar22.png);background-repeat: no-repeat;background-size:100%;margin-top:32px}
      .display-4{font-size: 3.5rem;font-weight: 500;line-height: 1.2;}
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
        <img src="images/titulo2.png" alt="">
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
    <div class="container">
      <div class="jumbotron">
        <h1 class="display-4">Nueva Cobertura Combinado Familiar</h1>
        <p class="lead">Un plan superior, completamente adaptable a tus necesidades de protección y tranquilidad. </p>
        <hr class="my-4">
        <p>Producto de Seguros Rivadavia</p>
        <p class="lead">
          <a class="btn btn-primary btn-lg" href="combinado_familiar.php" role="button">Leer más</a>
        </p>
      </div>
    </div>
    <div class="container" id="container">
      <div class="card-deck text-center">
        <div class="card"><a id="cardIndex" href="login.php">
          <img class="card-img-top" src="images/clientes.jpg" width="215px" height="315px" alt="Card image cap">
          <div class="card-footer">
            <small class="text-muted">Clientes</small>
          </div></a>
        </div>
        <div class="card"><a id="cardIndex" href="seguros_rivadavia.php">
          <img class="card-img-top" src="images/riv.png" width="215px" height="315px" alt="Card image cap">
          <div class="card-footer">
            <small class="text-muted">Seguros Rivadavia</small>
          </div></a>
        </div>
        <div class="card"><a id="cardIndex" href="sancor_seguros.php">
          <img class="card-img-top" src="images/sanc.png" width="215px" height="315px" alt="Card image cap">
          <div class="card-footer">
            <small class="text-muted">Sancor Seguros</small>
          </div></a>
        </div>
      </div>
    </div>


    <footer class="page-footer font-small" style="background-color:#212529">

        <!-- Footer Elements -->
        <div class="container">

          <!-- Grid row-->
          <div class="margin-top">

          </div>
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
