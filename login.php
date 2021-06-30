<?php
session_start();
if (isset($_SESSION['email']) && isset($_SESSION['clave'])) {
        header('location:clientes.php');
}else{
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MATEUPAS</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
    <style media="screen">
      a{
        margin-top: 5px;
      }
    
    </style>
  </head>

  <body class="text-center">
    <form class="form-signin" action="validar.php" method="post">
      <div class="text-center">
        <label class="msjErrorCampos" style="color:red"><?php if (isset($_SESSION['$error'])) {echo $_SESSION['$error']; $_SESSION['$error']=null;}?></label> <br><br>
      </div>
      <div class="text-center">
        <label class="msjErrorCampos" style="color:green"><?php if (isset($_SESSION['$exito'])) {echo $_SESSION['$exito']; $_SESSION['$exito']=null;}?></label> <br><br>
      </div>
      <h1 class="h3 mb-3 font-weight-normal">Iniciar Sesión:</h1>
      <label for="inputPassword" class="sr-only">Email:</label>
      <input type="text" name="email" class="form-control" placeholder="Email.." required>
      <label for="inputPassword" class="sr-only">Password</label>
      <input type="text" name="clave" class="form-control" placeholder="Contraseña" required>
      <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
      <a class="btn btn-secondary" href="registrarse.php" role="button" id="btn-registrarse">Registrarse</a><br>
      <a href="recuperar.php">Recuperar Contraseña</a>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
      <div style="margin: 10px">
        <a href="index.php" class="btn btn-primary btn-lg active" role="button">Volver</a>
      </div>

    </form>


  </body>
</html>

<?php
}
?>
