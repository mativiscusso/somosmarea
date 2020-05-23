<?php

require_once('partials/header.php');
?>

<div id="headerContacto" class="text-center pt-5">
   <h1 class="font-weight-bold">Contactanos</h1>
   <h3 class="font-weight-bolder">¿Que tal si charlamos?</h3>
   <h4>Dejanos tus datos y nos comunicaremos a la brevedad</h4>
</div>
<div class="container">
   <form id="contacto" class="mx-auto" action="https://formspree.io/xzbjparz" method="POST">
      <div class="form-group">
         <label for="exampleFormControlInput1">Nombre</label>
         <input type="text" class="form-control" id="nombre" name="nombre">
         <label for="exampleFormControlInput1">Email</label>
         <input type="email" class="form-control" id="email" name="email">
      </div>
      <div class="form-group">
         <label for="exampleFormControlInput1">Telefono</label>
         <input type="tel" class="form-control" id="telefono" name="telefono">
         <label for="exampleFormControlInput1">Empresa</label>
         <input type="text" class="form-control" id="empresa" name="empresa">
      </div>
      <div class="form-group">
         <label for="exampleFormControlSelect1">Servicio interesado</label>
         <select class="form-control" id="servicios" name="servicios">
            <option value="" disabled selected>Elige tu opción</option>
            <option name="1">Publicidad Digital</option>
            <option name="2">Community Management</option>
            <option name="3">Desarrollo Web</option>
            <option name="4">A medida</option>
         </select>
      </div>
      <div class="form-group">
         <label style="align-items: baseline; padding-top: 1%;width:12%"
            for="exampleFormControlTextarea1">Mensaje</label>
         <textarea class="form-control" id="mensaje" name="mensaje" rows="3"></textarea>
      </div>
      <div id="my-form-status" role="alert">
      </div>
      <button onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'formulario', 'event_label': 'click', 'value': '0'});" 
      id="my-form-button" value="Enviar" type="submit" class="btn btn-rounded btn-block z-depth-0 my-4 waves-effect">
      Enviar
      </button>
   </form>
</div>
<!-- Script para enviar email -->
<script>
  window.addEventListener("DOMContentLoaded", function() {

    // get the form elements defined in your form HTML above
    
    var form = document.getElementById("contacto");
    var button = document.getElementById("my-form-button");
    var status = document.getElementById("my-form-status");

    // Success and Error functions for after the form is submitted
    
    function success() {
      form.reset();
      status.className = ("badge badge-success");
      status.innerHTML = "Mensaje Enviado";
    }

    function error() {
      status.className = ("badge badge-danger");
      status.innerHTML = "Oops! Intente mas tarde.";
    }

    // handle the form submission event

    form.addEventListener("submit", function(ev) {
      ev.preventDefault();
      var data = new FormData(form);
      ajax(form.method, form.action, data, success, error);
    });
  });
  
  // helper function for sending an AJAX request

  function ajax(method, url, data, success, error) {
    var xhr = new XMLHttpRequest();
    xhr.open(method, url);
    xhr.setRequestHeader("Accept", "application/json");
    xhr.onreadystatechange = function() {
      if (xhr.readyState !== XMLHttpRequest.DONE) return;
      if (xhr.status === 200) {
        success(xhr.response, xhr.responseType);
      } else {
        error(xhr.status, xhr.response, xhr.responseType);
      }
    };
    xhr.send(data);
  }
</script>

<?php
require_once('partials/footer.php');
?>
