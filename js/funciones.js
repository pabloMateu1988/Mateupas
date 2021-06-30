function mostrarCajaTitular(){
  if (conductor_cliente.value == 'si') {
      document.getElementById('cajaTitular').style.display="block";
      document.getElementById('cajaConductorCliente').style.display="none";
      document.getElementById('nombre_cliente_conductor').value='-';
      document.getElementById('localidad_cliente_conductor').value='-';
      document.getElementById('domicilio_cliente_conductor').value='-';
      document.getElementById('dni_cliente_conductor').value='-';
      document.getElementById('tel_cliente_conductor').value='-';
      document.getElementById('ocupacion_cliente_conductor').value='-';
      document.getElementById('registro_cliente_conductor').value='-';
      document.getElementById('categoria_cliente_conductor').value='-';
      document.getElementById('Vencimiento_registro_cliente_conductor').value='-';

  }else{
    document.getElementById('cajaTitular').style.display="none";
    document.getElementById('cajaConductorCliente').style.display="block";
    document.getElementById('ocupacion_cliente').value='-';
    document.getElementById('registro_cliente').value='-';
    document.getElementById('categoria_cliente').value='-';
    document.getElementById('vencimiento_registro_cliente').value='-';

  }
}

function mostrarCajaRuta(){
  if (lugar_stro.value == 'ruta') {
    document.getElementById('cajaRuta').style.display="block"
  }else {
    document.getElementById('cajaRuta').style.display="none"
  }
}
function mostrarCajaLesionados(){
  if (lesionado_stro.value == "si") {
    document.getElementById('cajaLesionados').style.display="block"
  }else {
    document.getElementById('cajaLesionados').style.display="none"
  }
}

function mostrarCajaTestigo(){
  if (testigo_stro.value == "si") {
    document.getElementById('cajaTestigos').style.display="block"
  }else {
    document.getElementById('cajaTestigos').style.display="none"
  }
}

(function() {
  'use strict';
  window.addEventListener('load', function() {
    // Fetch all the forms we want to apply custom Bootstrap validation styles to
    var forms = document.getElementsByClassName('needs-validation');
    // Loop over them and prevent submission
    var validation = Array.prototype.filter.call(forms, function(form) {
      form.addEventListener('submit', function(event) {
        if (form.checkValidity() === false) {
          event.preventDefault();
          event.stopPropagation();
        }
        form.classList.add('was-validated');
      }, false);
    });
  }, false);
})();



//FUNCIONES PARA COTIZACIONES

function mostrarOcultar() {
    if (pregunta_cotizar.value == 'auto') {
                document.getElementById('cajaAuto').style.display="block";

    }else {
      document.getElementById('cajaAuto').style.display="none";
    }
    if (pregunta_cotizar.value == 'moto') {
                document.getElementById('cajaMoto').style.display="block";

    }else {
      document.getElementById('cajaMoto').style.display="none";
    }
    if (pregunta_cotizar.value == 'hogar') {
                document.getElementById('cajaHogar').style.display="block";

    }else {
      document.getElementById('cajaHogar').style.display="none";
    }
    if (pregunta_cotizar.value == 'comercio') {
                document.getElementById('cajaComercio').style.display="block";

    }else {
      document.getElementById('cajaComercio').style.display="none";
    }
  }

  function mostrar(){
    if (gnc.value == 'si') {
      document.getElementById('precio_gnc').style.display="block";
    }else{
      document.getElementById('precio_gnc').style.display="none";
    }
  }

  function mostrarCajaAccesorios(){
    if (accesorios.value == 'si') {
        document.getElementById('cajaAccesorios').style.display='block';
    }else{
      document.getElementById('cajaAccesorios').style.display='none';
    }
  }
