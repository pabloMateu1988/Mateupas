<?php session_start() ; $_SESSION['$error']="";?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/bootstrap.min.css">
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
    <div class="container">
      <div class="text-center" style="font-family:'Passion One'">
        <h1><a href="clientes.php">COTIZACIONES</a></h1>
      </div>
      <div class="row">
        <div class="text-center">
          <label class="msjErrorCampos" style="color:red"><?php if (isset($_SESSION['$error'])) {echo $_SESSION['$error']; $_SESSION['$error']=null;}?></label> <br><br>
        </div>
        <div class="col-md-12">
            <label for="">Elegir que quiere cotizar?:</label>
            <select name="pregunta_cotizar" class="form-control"id='pregunta_cotizar' onchange=" return mostrarOcultar()">
              <option disabled selected>Seleccione</option>
              <option value="auto">Auto</option>
              <option value="moto">Moto</option>
              <option value="hogar">Hogar</option>
            </select>
        </div>
          <div class="col-md-12" id="cajaAuto" style="display:none">
            <form  action="email/enviar_cotizacion.php" method="post">
                    <input type="text" name="validar" value="1" hidden>
                    <legend>Cotización automotor:</legend>
                    <label for="">Apellido y Nombre:</label>
                    <input type="text" name="nombre" value="" class="form-control" placeholder="Ingresar apellido y nombre.." required>
                    <label for="">Teléfono/Celular:</label>
                    <input type="text" name="telefono" value="" class="form-control" placeholder="Ingresar teléfono/celular..">
                    <label for="">Email:</label>
                    <input type="email" name="email" value=""  class="form-control" placeholder="Ingresar email.." required>
                    <label for="">Marca:</label>
                    <input type="text" name="marca" value="" class="form-control" placeholder="Ingresar marca.." required>
                    <label for="">Modelo:</label>
                    <input type="text" name="modelo" value="" class="form-control" placeholder="Ingresar modelo.." required>
                    <label for="">Año:</label>
                    <input type="text" name="ano" value="" class="form-control" placeholder="Ingresar año.." required>
                    <label for="">Tipo de combustible:</label>
                    <select name="combustible" class="form-control" id="combustible" required>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="nafta">Nafta</option>
                      <option value="diesel">Diesel</option>
                    </select>
                    <label for="">Posee GNC?:</label>
                    <select name="gnc" id="gnc"class="form-control" onchange="mostrar()" required>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>

                    <div id="precio_gnc" style="display:none">
                      <label for="">Ingresar precio del equipo completo:</label>
                      <input type="text" name="precio_gnc" class="form-control" value="" placeholder="Ingresar precio..">
                    </div>
                    <label for="">Posee accesorios no originales?:</label>
                    <select name="accesorios" class="form-control" id="accesorios" onchange="mostrarCajaAccesorios()">
                      <option value="" disabled selected>Seleccione</option>
                      <option value="si">Si</option>
                      <option value="No">No</option>
                    </select>

                    <div id='cajaAccesorios' style="display:none">
                      <textarea name="precio_accesorio" rows="8" cols="80" class="form-control" placeholder="Ingresar tipo de accesorio y precio.. Ejemplo: 4 Llantas Especiales - $10.000"></textarea>
                    </div>

                    <div class="text-center">
                      <button class="btn btn-primary" type="submit" style="margin: 10px;">Enviar Formulario</button>
                    </div>
            </form>
          </div>
          <div class="col-md-12" id="cajaMoto" style="display:none">
            <form action="email/enviar_cotizacion.php" method="post">
                <input type="text" name="validar" value="2" hidden>
                <legend>Cotización Moto:</legend>
                <label for="">Apellido y Nombre:</label>
                <input type="text" name="nombre" class="form-control" value="" placeholder="Ingresar apellido y nombre.." required>
                <label for="">Teléfono/Celular:</label>
                <input type="text" name="telefono" value="" class="form-control" placeholder="Ingresar teléfono/celular..">
                <label for="">Email:</label>
                <input type="email" name="email" value="" class="form-control"  placeholder="Ingresar email.." required>
                <label for="">Marca:</label>
                <input type="text" name="marca" value="" class="form-control" placeholder="Ingresar marca.." required>
                <label for="">Modelo:</label>
                <input type="text" name="modelo" value="" class="form-control" placeholder="Ingresar modelo.." required>
                <label for="">Año:</label>
                <input type="text" name="ano" value="" class="form-control" placeholder="Ingresar año.." required>
              <div class="text-center">
                <button class="btn btn-primary" type="submit" style="margin: 10px;">Enviar Formulario</button>
              </div>
            </form>
          </div>
          <div class="col-md-12" id="cajaHogar" style="display:none">
            <form action="email/enviar_cotizacion.php" method="post">
                <input type="text" name="validar" value="3" hidden>
                <legend>Cotizacion Hogar:</legend>
                <label for="">Apellido y Nombre:</label>
                <input type="text" name="nombre" value="" class="form-control"placeholder="Ingresar apellido y nombre.." required>
                <label for="">Teléfono/Celular:</label>
                <input type="text" name="telefono" value=""class="form-control" placeholder="Ingresar teléfono/celular..">
                <label for="">Email:</label>
                <input type="email" name="email" value=""class="form-control" placeholder="Ingresar email.." required>
                <legend>Indicar la zona donde se encuentra la casa:</legend>
                <div class="row">
                  <div class="col-md-4">
                    <label for="">Provincia</label>
                    <input type="text" name="provincia" value=""class="form-control" placeholder="Ingresar provincia..">
                  </div>
                  <div class="col-md-4">
                    <label for="">Localidad:</label>
                    <input type="text" name="localidad" value=""class="form-control" placeholder="Ingresar localidad..">
                  </div>
                  <div class="col-md-4">
                    <label for="">CP:</label>
                    <input type="text" name="cp" value=""class="form-control" placeholder="Ingresar codigo postal..">
                  </div>
                </div>

                  <legend>Datos de la casa:</legend>

                    <label for="">M<sup>2</sup> cubiertos de la casa:</label>
                    <input type="text" name="metros" value="" class="form-control" placeholder="Ingresar los M2 de superficie cubierta.." required>
                <div class="row">
                  <div class="col-md-3">
                    <label for="">Cantidad de plantas de la casa:</label>
                    <input type="text" name="plantas" value="" class="form-control" placeholder="Ingresar cantidad de plantas que tiene la casa.." required>
                  </div>
                  <div class="col-md-3">
                    <label for="">Tipo de construcción:</label>
                    <select id="tipo_construccion" name="tipo_construccion"class="form-control" required> <option value="" selected disabled>Seleccione</option><option value="Construida de ladrillos">Construida de ladrillos</option><option value="Const. hasta 50% madera y/o hierro">Const. hasta 50% madera y/o hierro</option><option value="Const. más de 50% madera y/o hierro">Const. más de 50% madera y/o hierro</option></select>
                  </div>
                  <div class="col-md-3">
                    <label for="">Alarma:</label>
                    <select id="alarma" name="alarma" class="form-control"required>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label for="">Rejas:</label>
                    <select id="rejas" name="rejas" class="form-control" required>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  </div>
                </div>

                    <label for="">Disyuntor:</label>
                    <select id="disyuntor" name="disyuntor"class="form-control" required>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  <div class="clear">
                    <label for="">Tiene muro, cerco y/o rejas de menos de 1,80 mts. y linda con terreno baldío u obra en construcción?:</label>
                    <select id="muro" name="muro" class="form-control" required>
                      <option value="" disabled selected>Seleccione</option>
                      <option value="si">Si</option>
                      <option value="no">No</option>
                    </select>
                  </div>
              <div class="text-center">
                <button class="btn btn-primary" type="submit" style="margin: 10px;">Enviar Formulario</button>
              </div>
            </form>
          </div>
    </div>
    <div class="text-center" style="margin: 10px">
      <a href="clientes.php" class="btn btn-primary btn-lg active" role="button">Volver</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones.js"></script>
  </body>
</html>
