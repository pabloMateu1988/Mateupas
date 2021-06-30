<?php
  session_start();

   //Datos titular
   $nombreTitular = $_POST['nombre_asegurado_cliente'];
   $patenteTitular = $_POST['patente_vehiculo_cliente'];
   $email = $_POST['email_cliente'];
   $conductorDelSiniestro = $_POST['conductor_cliente'];
   $ocupacionTitular = $_POST['ocupacion_cliente'];
   $registroTitular = $_POST['registro_cliente'];
   $categoriaCliente = $_POST['categoria_cliente'];
   $vencimientoCarnetCliente = $_POST['vencimiento_registro_cliente'];
   $alcoholemiaCliente = $_POST['alcoholemia_cliente'];
   //Datos conductor
   $nombreConductor = $_POST['nombre_cliente_conductor'];
   $domicilioConductor = $_POST['domicilio_cliente_conductor'];
   $localidadConductor = $_POST['localidad_cliente_conductor'];
   $dniConductor = $_POST['dni_cliente_conductor'];
   $telConductor = $_POST['tel_cliente_conductor'];
   $estadoCivil = $_POST['estado_civil_conductor'];
   $relacionAsegurado = $_POST['relacion_asegurado'];
   $fechaNacimientoCondu = $_POST['nacimiento_cliente_conductor'];
   $ocupacionCondu = $_POST['ocupacion_cliente_conductor'];
   $registroClienteCondu = $_POST['registro_cliente_conductor'];
   $categoriaClienteCondu = $_POST['categoria_cliente_conductor'];
   $vencimientoCondu = $_POST['vencimiento_registro_cliente_conductor'];
   $alcoholemiaCondu = $_POST['alcoholemia_cliente_conductor'];
   //Datos SINIESTRO
   $fechaStro = $_POST['fecha_stro'];
   $horaStro = $_POST['hora_stro'];
   $periodoStro = $_POST['periodo_stro'];
   $tiempoStro = $_POST['estado_del_tiempo_stro'];
   $direccionStro = $_POST['direccion_stro'];
   $paisStro = $_POST['pais_stro'];
   $provStro = $_POST['prov_stro'];
   $cpStro = $_POST['cp_stro'];
   $LocalidadStro = $_POST['localidad_stro'];
   $LugarStro = $_POST['lugar_stro'];
   $rutaStro = $_POST['ruta_stro'];
   $kmStro = $_POST['km_ruta_stro'];
   $tipoRutaStro = $_POST['tipo_ruta_stro'];
   $trenStro = $_POST['tren_stro'];
   $semaforoStro = $_POST['semaforo_stro'];
   $giroStro = $_POST['habilita_giro_stro'];
   $tipoCalzadaStro = $_POST['calzada_stro'];
   $estadoCalzadaStro = $_POST['estado_calzada_stro'];
   $accidenteStro = $_POST['accidente_stro'];
   $colisionStro = $_POST['colision_stro'];
   $pregLesionado = $_POST['lesionado_stro'];
   $lesionadosStro = $_POST['dato_lesionado_stro'];
   $pregTestigo = $_POST['testigo_stro'];
   $testigosStros = $_POST['dato_testigo_stro'];
   $ocurrenciaStro = $_POST['detalle_stro'];
   $ubicacionStro = $_POST['ubicacion_daño_stro_cliente'];
   $participacionStro = $_POST['participacion_dano_stro'];
   $danosDelStro = $_POST['dano_vehiculo_stro'];


     //DATOS TERCERO CONDU
     $nombreTerceroCondu = $_POST['nombre_conductor_tercero'];
     $telTerceroCondu = $_POST['telefono_conductor_tercero'];
     $domicilioTerceroCondu = $_POST['domicilio_conductor_tecero'];

     //DATOS TERCEROS PROPI
     $pregPropietarioVehiculoTercero = $_POST['propietario_tercero'];
     $nombreTerceroPropi = $_POST['nombre_propi_tercero'];
     $telTerceroPropi = $_POST['telefono_propi_tercero'];
     $domicilioTerceroPropi = $_POST['domicilio_propi_tercero'];

     //DATOS TERCEROS Auto
     $patenteTercero = $_POST['patente_tercero'];
     $marcaTercero = $_POST['marca_tercero'];
     $modeloTercero = $_POST['modelo_tercero'];
     $colorTercero = $_POST['color_tercero'];
     $tipoAutoTercero = $_POST['tipo_tercero'];
     $usoAutoTercero = $_POST['uso_tercero'];
     $aseguradoraTercero = $_POST['aseguradora_tercero'];
     $nroPolizaTercero = $_POST['poliza_tercero'];
     $ubicacionImpactoTercero = $_POST['impacto_tercero'];
     $detalleDanoTercero = $_POST['detalle_danos_tercero'];


      //Componemos cuerpo correo.
      $msjCorreo = "DATOS DEL TITULAR:";
      $msjCorreo .= "\r\n\n";
      $msjCorreo .= "Nombre del titular: " . $nombreTitular;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Patente Vehiculo: " . $patenteTitular;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "El conductor del vehículo al momento del siniestro era el propio asegurado?: " . $conductorDelSiniestro;
      $msjCorreo .= "\r\n";
      if ($conductorDelSiniestro == 'si') {
        $msjCorreo .= "Ocupacion del titular: " . $ocupacionTitular;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Registro titular: " . $registroTitular;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Categoria titular: " . $categoriaCliente;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Vencimiento carnet titular: " . $vencimientoCarnetCliente;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Alcoholemia titular: " . $alcoholemiaCliente;
        $msjCorreo .= "\r\n\n";
      }
      if ($conductorDelSiniestro == 'no') {
        $msjCorreo .= "Apellido y Nombre conductor: " . $nombreConductor;
        $msjCorreo .= "\r\n";
        $msjCorreo .= " Domicilio del conductor:" . $domicilioConductor;
        $msjCorreo .= "\r\n";
        $msjCorreo .= " Localidad del conductor:" . $localidadConductor;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Dni conductor: " . $dniConductor;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Telefono conductor: " . $telConductor;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Estado civil conductor: " . $estadoCivil;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Relación con el asegurado: " . $relacionAsegurado;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Fecha de nacimiento conductor: " . $fechaNacimientoCondu;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Ocupacion del conductor: " . $ocupacionCondu;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Registro conductor: " . $registroClienteCondu;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Categoria conductor: " . $categoriaClienteCondu;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Vencimiento carnet conductor: " . $vencimientoCondu;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Alcoholemia conductor: " . $alcoholemiaCondu;
        $msjCorreo .= "\r\n\n";
      }

      //DATOS DEL SINIESTRO
      $msjCorreo .= "DATOS DEL SINIESTRO: ";
      $msjCorreo .= "\r\n\n";
      $msjCorreo .= "Fecha del siniestro: " . $fechaStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Hora del siniestro: " . $horaStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Periodo del siniestro: " . $periodoStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Estado del tiempo siniestro: " . $tiempoStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Direccion del siniestro: " . $direccionStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Pais siniestro: " . $paisStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Provincia siniestro: " . $provStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "CP siniestro: " . $cpStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Localidad Siniestro: " . $LocalidadStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Lugar del siniestro: " . $LugarStro;
      $msjCorreo .= "\r\n";
      if ($LugarStro == 'ruta') {
        $msjCorreo .= "Ruta: " . $rutaStro;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Km de la ruta: " . $kmStro;
        $msjCorreo .= "\r\n";
        $msjCorreo .= "Tipo de ruta: " . $tipoRutaStro;
        $msjCorreo .= "\r\n";
      }
      $msjCorreo .= "Cruce del tren: " . $trenStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Semaforo: " . $semaforoStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Habilita giro?: " . $giroStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Tipo de calzada: " . $tipoCalzadaStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Estado de calzada: " . $estadoCalzadaStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Accidente: " . $accidenteStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Colision: " . $colisionStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Hubo lesionados?: " . $pregLesionado;
      $msjCorreo .= "\r\n";
      if ($pregLesionado == 'si') {
        $msjCorreo .= "Datos del lesionado: " . $patenteTitular;
        $msjCorreo .= "\r\n";
      }
      $msjCorreo .= "Hubo testigos?: " . $pregTestigo;
      $msjCorreo .= "\r\n";
      if ($pregTestigo == 'si') {
        $msjCorreo .= "Datos del testigo: " . $patenteTitular;
        $msjCorreo .= "\r\n";
      }
      $msjCorreo .= "Forma de ocurrencia del siniestro: " . $ocurrenciaStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Ubicacion del daño vehiculo asegurado: " . $ubicacionStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Participacion en el siniestro: " . $participacionStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Daños del vehiculo asegurado: " . $danosDelStro;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "\r\n";
      //
      $msjCorreo .= "DATOS DEL CONDUCTOR DEL TERCERO: ";
      $msjCorreo .= "\r\n\n";
      $msjCorreo .= "Apellido y nombre conductor del tercero: " . $nombreTerceroCondu;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Telefono conductor tercero: " . $telTerceroCondu;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Domicilio conductor tercero: " . $domicilioTerceroCondu;
      $msjCorreo .= "\r\n\n";
      $msjCorreo .= "El Conductor es el propietarios del vehículo?: " . $pregPropietarioVehiculoTercero;
      $msjCorreo .= "\r\n\n";
        if ($pregPropietarioVehiculoTercero == 'no') {
          $msjCorreo .= "DATOS DEL PROPIETARIO VEHÍCULO DEL TERCERO: ";
          $msjCorreo .= "\r\n\n";
          $msjCorreo .= "Apellido y nombre propietario del vehiculo tercero: " . $nombreTerceroPropi;
          $msjCorreo .= "\r\n";
          $msjCorreo .= "Telefono propietario del vehiculo tercero: " . $telTerceroPropi;
          $msjCorreo .= "\r\n";
          $msjCorreo .= "Domicilio propietario del vehiculo tercero: " . $domicilioTerceroPropi;
          $msjCorreo .= "\r\n\n";
        }
      $msjCorreo .= "DATOS DEL VEHÍCULO DEL TERCERO: ";
      $msjCorreo .= "\r\n\n";
      $msjCorreo .= "Patente de vehiculo del tercero: " . $patenteTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Marca del auto del tercero: " . $marcaTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Modelo de auto del tercero: " . $modeloTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Color de auto del tercero: " . $colorTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Tipo de auto del tercero: " . $tipoAutoTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Uso del vehiculo tercero: " . $usoAutoTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Aseguradora del tercero: " . $aseguradoraTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Nro de poliza del tercero: " . $nroPolizaTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Ubicacion impacto vehiculo del tercero: " . $ubicacionImpactoTercero;
      $msjCorreo .= "\r\n";
      $msjCorreo .= "Daños del vehiculo tercero: " . $detalleDanoTercero;
      $msjCorreo .= "\r\n";


    $msjCorreo2 = "La denuncia ha sido recibida.";
    $msjCorreo2.= "\r\n\n";
    $msjCorreo2.="Saludos atte,";
    $msjCorreo2.= "\r\n\n";
    $msjCorreo2.="Daniel O. Mateu y Pablo Mateu";
    $msjCorreo2.= "\r\n";
    $msjCorreo2.="Productores Asesores de Seguros";

    $para      = 'admin@mateupas.com';
    $titulo    = 'Denuncia';
    $titulo=utf8_decode($titulo);
    utf8_decode($cabeceras = 'From:'. $email  . "\r\n" .
    'Reply-To:' . $email . "\r\n" .
    'X-Mailer: PHP/' . phpversion());

    utf8_decode($cabeceras2 = 'From:'. $para . "\r\n" .
      'Reply-To:' . $para . "\r\n" .
      'X-Mailer: PHP/' . phpversion());

    $msjCorreo = utf8_decode($msjCorreo);

    if (mail($para, $titulo,$msjCorreo, $cabeceras)) {
          mail($email,$titulo, $msjCorreo2,$cabeceras2);
          echo "<script>alert('El formulario ha sido enviado, va a recibir un mail de confirmación'); location.href='https://mateupas.com/clientes.php';</script>";
    } else {
          echo "<script>alert('Hubo un error, volver a enviar el formulario'); location.href='https://mateupas.com/denuncias.php';</script>";
    }






?>
