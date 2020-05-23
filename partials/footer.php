<footer>
   <div id="whatsapp">
      <a href="https://api.whatsapp.com/send?phone=5493412551101&text=Hola,%20me%20interesan%20los%20servicios%20que%20ofrecen."
         target="_blank" Onclick="gtag('event', 'enlace', { 'event_category': 'contacto', 'event_action': 'whatsapp', 'event_label': 'click', 'value': '0'});">
         <i class="fab fa-whatsapp z-depth-2 animated bounce"></i>
      </a>
   </div>

   <div id="botonesRedes" class="text-center">
      <ul>
         <a class="btnFooter" target="_blank" href="https://www.facebook.com/agenciamarea1/">
            <i class="fab fa-facebook-f fa-2x mx-3"></i>
         </a>
         <a class="btnFooter" target="_blank" href="https://www.instagram.com/agenciamarea/">
            <i class="fab fa-instagram fa-2x mx-3"></i>
         </a>
         <a class="btnFooter" target="_blank" href="https://www.linkedin.com/company/mareamarketing/">
            <i class="fab fa-linkedin-in fa-2x mx-3"></i>
         </a>
      </ul>
   </div>
   <span>© 2020 Agencia MAREA | Todos los derechos reservados </span>

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="../js/jquery-3.4.1.min.js"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="../js/popper.min.js"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="../js/bootstrap.min.js"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="../js/mdb.min.js"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();
  </script>
  <!--- Animacion Wow --->
   <script src="../js/modules/wow.js"></script>
   <script src="/js/navbar.js"></script>
   <link rel="stylesheet" href="https://unpkg.com/flickity@2/dist/flickity.min.css">
   <script async src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js"></script>
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
</footer>
</body>

</html>