<?php
session_start();
if (!empty($_SESSION['email']) && !empty($_SESSION['clave'])) { ?>
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
    <noscript>
      <div class="alert alert-danger" role="alert">
        El sitio web que estás viendo requiere para su correcto funcionamiento el uso de JavaScript, por favor habilitarlo, muchas gracias. Si no sabe cómo habilitarlo ingresar <a href="ayuda.php" class="alert-link"> aquí</a>.
      </div>
    </noscript>
    <div class="container">
      <div class="text-center" style="font-family:'Passion One'">
        <h1><a href="clientes.php">DENUNCIAS</a></h1>
      </div>
      <div class="main">
          <form action="email/enviar_denuncia.php" method="post" class="needs-validation" novalidate>
                  <div class="form-group">
                      <div class="col-md-12">
                        <label class="col-form-label" for="">Apellido y Nombre (titular del seguro):</label>
                        <input type="text" class="form-control" name="nombre_asegurado_cliente" value="" required>
                      </div>
                      <div class="col-md-12">
                        <label for="" class="col-form-label">Patente del vehículo:</label>
                        <input type="text"  class="form-control" name="patente_vehiculo_cliente" value="" required>
                      </div>
                      <div class="col-md-12">
                        <label for=""class="col-form-label">Email:</label>
                        <input type="email" class="form-control" name="email_cliente" value="" required>
                      </div>
                      <div class="col-md-12">
                        <label for="">El conductor del vehículo al momento del siniestro era el propio asegurado?:</label>
                        <select class="form-control" name="conductor_cliente" id="conductor_cliente" onchange="mostrarCajaTitular()" required>
                          <option value="" disabled selected>Seleccione</option>
                          <option value="si">Si</option>
                          <option value="no">No</option>
                        </select>
                      </div>

        <!--------------------------- CAJA TITULAR -------------------------------------------------------------------->

                        <div id="cajaTitular" style="display:none">
                          <div class="col-md-12">
                            <div class="row">
                              <div class="col-md-12">
                                <label for=""class="col-form-label">Ocupación:</label>
                                <input type="text" class="form-control" name="ocupacion_cliente" id="ocupacion_cliente" value="" required>
                              </div>
                              <div class="col-md-4">
                                <label for=""class="col-form-label">N° de registro:</label>
                                <input type="text" class="form-control" name="registro_cliente" id="registro_cliente" value="" required>
                              </div>
                              <div class="col-md-4">
                                <label for=""class="col-form-label">Categoria:</label>
                                <input type="text" class="form-control" name="categoria_cliente" id="categoria_cliente" value="" required>
                              </div>
                              <div class="col-md-4">
                                <label for=""class="col-form-label">Vencimiento:</label>
                                <input type="text" class="form-control" name="vencimiento_registro_cliente"  id="vencimiento_registro_cliente" value="" required>
                              </div>
                              <div class="col-md-12">
                                <label  class="col-form-label" style="color:red" for="">*Enviar foto del registro de conducir por Whatsapp al 221-455-7278(Daniel) o al 221-623-4423(Pablo), sino por mail a mateupas@hotmail.com, mateu.pablo@hotmail.com o admin@mateupas.com</label>
                              </div>
                              <div class="col-md-12">
                                <label for=""class="col-form-label">Examen de alcoholemia?:</label>
                                <select class="form-control"name="alcoholemia_cliente" id="alcoholemia_cliente"required>
                                    <option selected disabled >Seleccione</option>
                                    <option value="si" >Si</option>
                                    <option value="no">No</option>
                                </select>
                              </div>
                            </div>
                          </div>
                        </div>
      <!--------------------------- CAJA CONDUCTOR -------------------------------------------------------------------->
                        <div id="cajaConductorCliente" style="display:none">
                          <div class="col-md-12">
                            <legend>Datos del conductor del vehículo asegurado al momento del siniestro:</legend>
                            <div class="row">
                              <div class="col-md-12">
                                <label for=""class="col-form-label">Apellido y Nombre:</label>
                                <input type="text" class="form-control" name="nombre_cliente_conductor" id="nombre_cliente_conductor" value=""required>
                              </div>
                              <div class="col-md-6">
                                <label for=""class="col-form-label">Domicilio:</label>
                                <input type="text" class="form-control" name="domicilio_cliente_conductor" id="domicilio_cliente_conductor" value=""required>
                              </div>
                              <div class="col-md-6">
                                <label for=""class="col-form-label">Localidad:</label>
                                <input type="text" class="form-control" name="localidad_cliente_conductor" id="localidad_cliente_conductor" value=""required>
                              </div>
                              <div class="col-md-12">
                                <label for=""class="col-form-label">DNI:</label>
                                <input type="text" class="form-control" name="dni_cliente_conductor" id="dni_cliente_conductor" value=""required>
                              </div>
                              <div class="col-md-12">
                                <label for=""class="col-form-label">Teléfono/Celular:</label>
                                <input type="text" class="form-control" name="tel_cliente_conductor" id="tel_cliente_conductor" value="" required>
                              </div>
                              <div class="col-md-6">
                                <label for=""class="col-form-label">Estado civil:</label>
                                <select class="form-control" id="estado_civil_conductor" name="estado_civil_conductor">
                                  <option selected="" value="" disabled="" required>Seleccione</option>
                                  <option value="Soltero/a">Soltero/a</option>
                                  <option value="Casado/a">Casado/a</option>
                                  <option value="Divorciado/a">Divorciado/a</option>
                                  <option value="Viudo/a">Viudo/a</option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label for=""class="col-form-label">Fecha de nacimiento:</label>
                                <input type="date" class="form-control" name="nacimiento_cliente_conductor" id="nacimiento_cliente_conductor" value="" >
                              </div>
                              <div class="col-md-12">
                                <label for=""class="col-form-label">Relación con el asegurado:</label>
                                <select class="form-control" id="relacion_asegurado" name="relacion_asegurado">
                                  <option selected="" value="" disabled="" required>Seleccione</option>
                                  <option value="hijo">Hijo/a</option>
                                  <option value="conyuge">Conyuge</option>
                                  <option value="concubino">Concubino</option>
                                  <option value="padre">Padre</option>
                                  <option value="familiar">Familiar</option>
                                  <option value="amigo">Amigo</option>
                                  <option value="laboral">Laboral</option>
                                  <option value="madre">Madre</option>
                                  <option value="hermano">Hermano/a</option>
                                  <option value="tio/a">Tio/a</option>
                                  <option value="sobrino/a">Sobrino/a</option>
                                  <option value="el mismo">El mismo</option>
                                  <option value="otros">Otros</option>
                              </select>
                              </div>
                              <div class="col-md-12">
                                <label for=""class="col-form-label">Ocupación:</label>
                                <input type="text" class="form-control" name="ocupacion_cliente_conductor"id="ocupacion_cliente_conductor" value="" required>
                              </div>
                              <div class="col-md-4">
                                <label for="" class="col-form-label">N° de registro:</label>
                                <input type="text" class="form-control" name="registro_cliente_conductor" id="registro_cliente_conductor" value="" required>
                              </div>
                              <div class="col-md-4">
                                <label class="col-form-label" for="">Categoria:</label>
                                <input type="text" class="form-control" name="categoria_cliente_conductor" id="categoria_cliente_conductor" value="" required>
                              </div>
                              <div class="col-md-4">
                                <label class="col-form-label" for="">Vencimiento:</label>
                                <input type="text" class="form-control" name="vencimiento_registro_cliente_conductor" id="Vencimiento_registro_cliente_conductor" value="" required>
                              </div>
                              <div class="col-md-12">
                                <label class="col-form-label" for="">Examen de alcoholemia?:</label>
                                <select class="form-control" name="alcoholemia_cliente_conductor">
                                    <option value="" disabled selected>Seleccione</option>
                                    <option value="si">Si</option>
                                    <option value="no">No</option>
                                </select>
                              </div>
                              <div class="col-md-12">
                                <label class="col-form-label" style="color:red"for="">*Enviar foto del registro de conducir por Whatsapp al 221-455-7278(Daniel) o al 221-623-4423(Pablo), sino por mail a mateupas@hotmail.com, mateu.pablo@hotmail.com o admin@mateupas.com</label>
                              </div>
                            </div>
                          </div>
                        </div>
      <!--------------------------- DATOS SINIESTROS -------------------------------------------------------------------->
                          <div class="col-md-12">
                            <legend>Datos sobre el siniestro:</legend>
                            <div class="row">
                                  <div class="col-md-6">
                                    <label for="" class="col-form-label">Fecha:</label>
                                    <input type="text" class="form-control" name="fecha_stro" value="" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label for="" class="col-form-label">Hora:</label>
                                    <input type="time"class="form-control" name="hora_stro" value="" required>
                                  </div>
                                  <div class="col-md-6">
                                    <label class="col-form-label" for="">Periodo:</label>
                                    <select class="form-control" name="periodo_stro" required>
                                      <option value="" selected disabled="">Seleccione</option>
                                      <option value="Diurno">Diurno</option>
                                      <option value="Nocturno">Nocturno</option>
                                    </select>
                                  </div>
                                  <div class="col-md-6">
                                    <label class="col-form-label" for="">Estado del tiempo:</label>
                                    <select class="form-control" name="estado_del_tiempo_stro" required>
                                      <option value="" selected disabled>Seleccione</option>
                                      <option value="Seco">Seco</option>
                                      <option value="Lluvia">Lluvia</option>
                                      <option value="Niebla">Niebla</option>
                                      <option value="Granizo">Granizo</option>
                                      <option value="Nieve">Nieve</option>
                                    </select>
                                  </div>
                                  <div class="col-md-12">
                                    <label class="col-form-label" for="">Direccion donde ocurrio el siniestro:</label>
                                    <input type="text" name="direccion_stro" class="form-control" value="" required>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label" for="">País</label>
                                    <input type="text" name="pais_stro" class="form-control" value="" required>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label" for="">Provincia:</label>
                                    <input type="text" name="prov_stro"class="form-control" value="" required>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label" for="">CP:</label>
                                    <input type="text" name="cp_stro" class="form-control"value="" required>
                                  </div>
                                  <div class="col-md-3">
                                    <label class="col-form-label" for="">Localidad:</label>
                                    <input type="text" class="form-control" name="localidad_stro" value="" required>
                                  </div>
                                  <div class="col-md-12">
                                    <label for="" class="col-form-label">Lugar:</label>
                                    <select class="form-control" id="lugar_stro" name="lugar_stro" onchange="mostrarCajaRuta()" required>
                                      <option value="" selected disabled>Seleccione</option>
                                      <option value="Calle">Calle</option><option value="ruta">Ruta</option> <option value="Autopista">Autopista</option>
                                      <option value="Tunel">Tunel</option><option value="Sobre Puente">Sobre Puente</option>
                                      <option value="Curva">Curva</option><option value="Otros">Otros</option></select>
                                  </div>
                            </div>
                          </div>
        <!---------------------------------------------CAJA RUTA----------------------------------------------->
                          <div class="" id="cajaRuta" style="display:none">
                            <div class="col-md-12">
                              <div class="row">
                                <div class="col-md-4">
                                  <label for="" class="col-form-label">Ruta:</label>
                                  <input type="text" class="form-control" name="ruta_stro" value="">
                                </div>
                                <div class="col-md-4">
                                  <label for="" class="col-form-label">KM::</label>
                                  <input type="text" class="form-control" name="km_ruta_stro" value="">
                                </div>
                                <div class="col-md-4">
                                  <label for="" class="col-form-label">Tipo::</label>
                                  <select class="form-control" name="tipo_ruta_stro">
                                    <option value="" disabled selected>Seleccione</option>
                                    <option value="nacional">Nacional</option>
                                    <option value="provincial">Provincial</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                          </div>
      <!---------------------------------------------VUELTA DE DATOS SINIESTRO----------------------------------------------->
                        <div class="col-md-12">
                          <div class="row">
                            <div class="col-md-4">
                              <label for="" class="col-form-label">Cruce de tren?:</label>
                              <select class="form-control" id="tren_stro" name="tren_stro">
                                <option disabled value="" selected="">Seleccione</option>
                                <option value="No">No</option>
                                <option value="Cruce Señalizado">Cruce Señalizado</option>
                                <option value="Con barrera alta">Con barrera alta</option>
                                <option value="Con barrera baja">Con barrera baja</option><option value="Otro">Otro</option></select>
                            </div>
                            <div class="col-md-4">
                              <label for="" class="col-form-label">Semáforo:</label>
                              <select class="form-control" id="semaforo_stro" name="semaforo_stro">
                                <option value="" selected disabled>Seleccione</option><option value="No">No</option>
                                <option value="Existe no funciona">Existe no funciona</option><option value="Intermitente">Intermitente</option>
                                <option value="Verde">Verde</option>
                                <option value="Amarillo">Amarillo</option><option value="Rojo">Rojo</option></select>
                            </div>
                            <div class="col-md-4">
                              <label for="" class="col-form-label">Habilita Giro?:</label>
                              <select class="form-control" name="habilita_giro_stro">
                                <option disabled value="" selected>Seleccione</option>
                                <option value="No">No</option>
                                <option value="Si">Si</option>
                              </select>
                            </div>
                            <div class="col-md-6">
                              <label for="" class="col-form-label">Tipo de calzada:</label>
                              <select class="form-control " id="calzada_stro" name="calzada_stro" required>
                                <option selected value="" disabled="">Seleccione</option>
                                <option value="Pavimento">Pavimento</option><option value="Empedrado">Empedrado</option>
                                <option value="Tierra">Tierra</option>
                                <option value="Ripio">Ripio</option
                                  ><option value="Otro">Otro</option></select>
                            </div>
                            <div class="col-md-6">
                              <label for="" class="col-form-label">Estado de calzada:</label>
                              <select class="form-control " id="estado_calzada_stro" name="estado_calzada_stro" required>
                                <option selected value="" disabled="">Seleccione</option>
                                <option value="Bueno">Bueno</option>
                                <option value="Regular">Regular</option>
                                <option value="Malo">Malo</option></select>
                            </div>
                            <div class="col-md-6">
                              <label for="" class="col-form-label">Accidente:</label>
                              <select class="form-control" id="accidente_stro" name="accidente_stro" required> <option value="" selected disabled="">Seleccione</option>
                                <option value="Choque">Choque</option><option value="En cadena">En cadena</option>
                                <option value="Vuelco">Vuelco</option><option value="Inmersión">Inmersión</option>
                                <option value="Incendio">Incendio</option><option value="Explosión">Explosión</option>
                                <option value="Daños carga">Daños carga</option><option value="Otro">Otro</option></select>
                            </div>
                            <div class="col-md-6">
                              <label for="" class="col-form-label">Colisión:</label>
                              <select class="form-control " id="colision_stro" name="colision_stro" required>
                                <option value="" selected disabled="">Seleccione</option>
                                <option value="Peatón">Peatón</option>
                                <option value="Vehículo">Vehículo</option>
                                <option value="Transporte Publico">Transporte Publico</option>
                                <option value="Columna">Columna</option>
                                <option value="Edificio">Edificio</option>
                                <option value="Animal">Animal</option>
                                <option value="Otro">Otro</option></select>
                            </div>
                            <div class="col-md-12">
                              <label for="" class="col-form-label">Hubo lesionados en el siniestro?:</label>
                              <select class="form-control" id="lesionado_stro" name="lesionado_stro" onchange="mostrarCajaLesionados()" required>
                                <option disabled value="" selected>Seleccione</option>
                                <option value="no">No</option>
                                <option value="si">Si</option>
                              </select>
                            </div>

                            <div class="col-md-12" id="cajaLesionados" style="display:none">
                                    <label for="" class="col-form-label">Datos de los lesionados:</label>
                                    <textarea name="dato_lesionado_stro" cols="12" rows="5" class="form-control"placeholder="Ingresar los siguientes datos de la persona lesionada.. Apellido y Nombre; Domicilio; Teléfono/Celular"></textarea>
                            </div>
                            <div class="col-md-12">
                              <label for="" class="col-form-label">Posee Testigos?:</label>
                              <select class="form-control" id="testigo_stro" name="testigo_stro" onchange="mostrarCajaTestigo()" required>
                                <option disabled value="" selected>Seleccione</option>
                                <option value="no">No</option>
                                <option value="si">Si</option>
                              </select>
                            </div>
                            <div class="col-md-12" id="cajaTestigos" style="display:none">
                                    <label for="" class="col-form-label">Datos de los testigos:</label>
                                    <textarea name="dato_testigo_stro" cols="12" rows="5" class="form-control"placeholder="Ingresar los siguientes datos del testigo.. Apellido y Nombre; Domicilio; Teléfono/Celular"></textarea>
                            </div>
                          </div>

                            <div class="row">
                              <div class="col-md-12">
                                <label for="" class="col-form-label">Describir cómo ocurrio el siniestro:</label>
                                <textarea name="detalle_stro" cols="12" rows="5" required  class="form-control" placeholder="Ingresar en detalle cómo ocurrio el siniestro.."></textarea>
                              </div>
                              <div class="col-md-6">
                                <label for="" class="col-form-label">Ubicación del daño vehículo asegurado:</label>
                                <select class="form-control" name="ubicacion_daño_stro_cliente" required>
                                  <option value="" selected disabled>Seleccione</option>
                                  <option value="Frontal">Frontal</option>
                                  <option value="Lateral Izquierdo">Lateral Izquierdo</option>
                                  <option value="Lateral Derecho">Lateral Derecho</option>
                                  <option value="Techo">Techo</option>
                                  <option value="Parte trasera">Parte trasera</option>
                                  <option value=""></option>
                                </select>
                              </div>
                              <div class="col-md-6">
                                <label for="" class="col-form-label">Participación en el siniestro:</label>
                                <select class="form-control " id="" name="participacion_dano_stro" required>
                                  <option selected value="" disabled>Seleccione</option>
                                  <option value="Embistente">Embistente</option>
                                  <option value="Embestido">Embestido</option></select>
                              </div>
                              <div class="col-md-12">
                                <label for="" class="col-form-label">Ingresar los daños del vehículo asegurado ocurridos en el siniestro:</label>
                                <textarea class="form-control" cols="12" rows="5" required name="dano_vehiculo_stro" placeholder="Ingresar los daños ocurridos en el siniestro.."></textarea>
                              </div>
                              <div class="col-md-12">
                                <label  class="col-form-label" style="color:red" for="">*Enviar fotos del daño del vehículo asegurado, puede enviarlas por Whatsapp al 221-455-7278(Daniel) o al 221-623-4423(Pablo), sino por mail a mateupas@hotmail.com, mateu.pablo@hotmail.com o admin@mateupas.com</label>
                              </div>
                              <div class="col-md-12" id="cajaTerceros">
                                  <legend>Datos del conductor vehículo del tercero:</legend>
                                  <div class="row">
                                    <div class="col-md-4">
                                      <label for="" class="col-form-label">Apellido y Nombre:</label>
                                      <input type="text" name="nombre_conductor_tercero" value="" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="" class="col-form-label">Teléfono/Celular:</label>
                                      <input type="text" name="telefono_conductor_tercero" value="" class="form-control">
                                    </div>
                                    <div class="col-md-4">
                                      <label for="" class="col-form-label">Domicilio:</label>
                                      <input type="text" name="domicilio_conductor_tecero" value="" class="form-control">
                                    </div>
                                    <div class="col-md-12">
                                      <label for="" class="col-form-label">El Conductor es el propietarios del vehículo?:</label>
                                      <select class="form-control" id="propietario_tercero" name="propietario_tercero" onchange="mostrarCajaPropietarioTercero()">
                                        <option value="" disabled selected>Seleccione</option>
                                        <option value="si">Si</option>
                                        <option value="no">No</option>
                                      </select>
                                    </div>
                                    <div class="col-md-12" id="cajaPropietario" style="display:none">
                                      <legend>Datos del propietario del vehículo:</legend>
                                      <div class="row">
                                        <div class="col-md-4">
                                          <label for="" class="col-form-label">Apellido y Nombre:</label>
                                          <input type="text" name="nombre_propi_tercero" value="" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                          <label for="" class="col-form-label">Teléfono/Celular:</label>
                                          <input type="text" name="telefono_propi_tercero" value="" class="form-control">
                                        </div>
                                        <div class="col-md-4">
                                          <label for="" class="col-form-label">Domicilio:</label>
                                          <input type="text" name="domicilio_propi_tercero" value="" class="form-control">
                                        </div>
                                      </div>
                                    </div>
                                    <div class="col-md-12">
                                      <legend>Datos del vehículo del tercero:</legend>
                                      <div class="row">
                                        <div class="col-md-3">
                                          <label for="" class="col-form-label">Patente:</label>
                                          <input type="text" name="patente_tercero" class="form-control" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <label for="" class="col-form-label">Marca:</label>
                                          <input type="text" name="marca_tercero" class="form-control" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <label for="" class="col-form-label">Modelo:</label>
                                          <input type="text" name="modelo_tercero" class="form-control" value="">
                                        </div>
                                        <div class="col-md-3">
                                          <label for="" class="col-form-label">Color:</label>
                                          <input type="text" name="color_tercero" class="form-control" value="">
                                        </div>
                                        <div class="col-md-12">
                                          <label for="" class="col-form-label">Tipo</label>
                                          <select class="form-control" id="tipo_tercero" name="tipo_tercero">
                                              <option value="" selected disabled>Seleccione</option><option value="Auto">Auto</option><option value="Serv. Transporte Especial">Serv. Transporte Especial</option>
                                              <option value="Serv. Transporte Publico">Serv. Transporte Publico</option>
                                              <option value="Jeep/Pick Up">Jeep/Pick Up</option>
                                              <option value="Trailer/Casa Rodante">Trailer/Casa Rodante</option>
                                              <option value="Camión/Chasis">Camión/Chasis</option><option value="Acoplado/Semi">Acoplado/Semi</option>
                                              <option value="Tractor/Maquina Rural">Tractor/Maquina Rural</option><option value="Motos/Cuatriciclos">Motos/Cuatriciclos</option>
                                              <option value="Bicicleta">Bicicleta</option><option value="Otros">Otros</option>
                                          </select>
                                        </div>
                                        <div class="col-md-12">
                                          <label for="" class="col-form-label">Uso</label>
                                          <select class="form-control" id="uso_tercero" name="uso_tercero">
                                             <option value="" disabled selected>Seleccione</option><option value="Particular">Particular</option>
                                             <option value="Taxi/Remis">Taxi/Remis</option><option value="Transporte Publico">Transporte Publico</option>
                                             <option value="Servicio de urgencia">Servicio de urgencia</option>
                                             <option value="Fuerza de seguridad">Fuerza de seguridad</option>
                                          </select>
                                        </div>
                                        <div class="col-md-6">
                                          <label for="" class="col-form-label">Asegurado en:</label>
                                          <input type="text" name="aseguradora_tercero" class="form-control" value="">
                                        </div>
                                        <div class="col-md-6">
                                          <label for="" class="col-form-label">Nro de póliza:</label>
                                          <input type="text" name="poliza_tercero" class="form-control" value="">
                                        </div>
                                        <div class="col-md-12">
                                          <legend>Daños en el vehículo del tercero:</legend>
                                          <div class="row">
                                            <div class="col-md-12">
                                              <label for="" class="col-form-label">Ubicación impacto:</label>
                                              <select class="form-control" id="impacto_tercero" name="impacto_tercero">
                                                <option value="" selected disabled="">Seleccione</option>
                          											<option value="Frontal">Frontal</option>
                          											<option value="Lateral Izquierdo">Lateral Izquierdo</option>
                          											<option value="Lateral Derecho">Lateral Derecho</option>
                          											<option value="Techo">Techo</option>
                          											<option value="Parte trasera">Parte trasera</option>
                                              </select>
                                            </div>
                                            <div class="col-md-12">
                                              <label for="" class="col-form-label">Ingresar los daños que vio en el vehículo del tercero ocurridos en el siniestro:</label>
                                              <textarea name="detalle_danos_tercero" class="form-control" rows="5" cols="12" ></textarea>
                                            </div>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                              </div>
                            </div><!--div LINEA 299-->

                        </div> <!--div LINEA 210-->

                  </div><!--div LINEA 16-->
            <div class="text-center">
              <button class="btn btn-primary btn-lg" type="submit">Enviar Formulario</button>
            </div>
          </form>
          <div class="text-center" style="margin: 10px">
            <a href="clientes.php" class="btn btn-primary btn-sm active" role="button">Volver</a>
          </div>

    </div><!---Fin del main-->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/funciones.js"></script>
  </body>
  <div class="footer">
    <footer> Copyright (c) 2018 Copyright Holder All Rights Reserved.</footer>
  </div>

</html>
<?php

}else{
  header('location:login.php');
}


 ?>
