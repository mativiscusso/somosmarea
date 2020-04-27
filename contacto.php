
<!DOCTYPE html>
<html lang="en">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <link rel="stylesheet" href="../css/style.css">
   <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@200;400;600;800&display=swap" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css2?family=Oswald&display=swap" rel="stylesheet">
   <!-- Bootstrap core CSS -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
   <!-- Material Design Bootstrap -->
   <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/css/mdb.min.css" rel="stylesheet">
   <link rel="shortcut icon" href="../img/mobile/eme.jpg" type="image/x-icon">
   <!-- Font Awesome -->
   <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window,document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
 fbq('init', '492344318206066'); 
fbq('track', 'PageView');
</script>
<noscript>
 <img height="1" width="1" 
src="https://www.facebook.com/tr?id=492344318206066&ev=PageView
&noscript=1"/>
</noscript>
<!-- End Facebook Pixel Code -->

<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-138541964-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-138541964-1');
</script>



   <title>Agencia MAREA</title>
</head>

<body>
   <nav id="navigation" class="navbar navbar-expand-lg navbar-dark ">
      <a class="navbar-brand animated fadeInLeft" href="/"><span class="brand">AGENCIA <b>MAREA</b></span></a>

      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav" aria-controls="navbarNav"
         aria-expanded="false" aria-label="Toggle navigation">
         <svg class="ham hamRotate ham1" viewBox="0 0 100 100" width="60" onclick="this.classList.toggle('active')">
            <path class="line top"
               d="m 30,33 h 40 c 0,0 9.044436,-0.654587 9.044436,-8.508902 0,-7.854315 -8.024349,-11.958003 -14.89975,-10.85914 -6.875401,1.098863 -13.637059,4.171617 -13.637059,16.368042 v 40" />
            <path class="line middle" d="m 30,50 h 40" />
            <path class="line bottom"
               d="m 30,67 h 40 c 12.796276,0 15.357889,-11.717785 15.357889,-26.851538 0,-15.133752 -4.786586,-27.274118 -16.667516,-27.274118 -11.88093,0 -18.499247,6.994427 -18.435284,17.125656 l 0.252538,40" />
         </svg>
      </button>
      <div class="collapse navbar-collapse" id="nav">
         <ul id="menu" class="navbar-nav m-0 ml-lg-auto p-3 p-lg-0">
            <li class="nav-item dropdown">
               <!-- Basic dropdown -->
               <a class="nav-link dropdown-toggle" href="" data-toggle="dropdown" aria-haspopup="true"
                  aria-expanded="false"> SERVICIOS</a>

               <div class="dropdown-menu">
                  <a class="dropdown-item" href="/servicios/publicidad.html">Publicidad Digital</a>
                  <a class="dropdown-item" href="/servicios/web.html">Desarrollo Web</a>
                  <a class="dropdown-item" href="/servicios/cm.html">Community Management</a>
               </div>
               <!-- Basic dropdown -->
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/planes.html">PLANES</a>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="/contacto.php">CONTACTO</a>
            </li>
         </ul>
      </div>
   </nav>

   <div id="headerContacto" class="text-center pt-5">
      <h1 class="font-weight-bold">Contactanos</h1>
      <h3 class="font-weight-bolder">¿Que tal si charlamos?</h3>
      <h4>Dejanos tus datos y nos comunicaremos a la brevedad</h4>
   </div>
   <div class="container">
      <form id="contacto" class="mx-auto" accion="contacto.php" method="POST">
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
         <button class="btn btn-rounded btn-block z-depth-0 my-4 waves-effect" type="submit" name="enviar"
            id="btnEnviar">Enviar</button>

      </form>
   </div>
   </div>
   <footer>
   <div id="whatsapp">
         <a href="https://api.whatsapp.com/send?phone=5493412551101&text=Hola,%20te%20contacto%20desde%20la%20web..."
            target="_blank">
            <i class="fab fa-whatsapp z-depth-2 animated bounce"></i>
         </a>
      </div>
      <div id="botonesRedes" class="text-center">
         <ul>
            <a class="btnFooter" href="https://www.facebook.com/agenciamarea1/">
               <i class="fab fa-facebook-f fa-2x mx-3"></i>
            </a>
            <a class="btnFooter" href="https://www.instagram.com/agenciamarea/">
               <i class="fab fa-instagram fa-2x mx-3"></i>
            </a>
            <a class="btnFooter" href="https://www.linkedin.com/company/mareamarketing/">
               <i class="fab fa-linkedin-in fa-2x mx-3"></i>
            </a>
         </ul>
      </div>
      <span>© 2020 Agencia MAREA | Todos los derechos reservados </span>

      <!-- JQuery -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js">
      </script>
      <!-- Bootstrap tooltips -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.4/umd/popper.min.js">
      </script>
      <!-- Bootstrap core JavaScript -->
      <script type="text/javascript"
         src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.4.1/js/bootstrap.min.js"></script>
      <!-- MDB core JavaScript -->
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.15.0/js/mdb.min.js">
      </script>
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   </footer>
</body>

</html>

<?php
use PHPMailer\PHPMailer\PHPMailer;
require '../vendor/autoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.hostinger.com.ar';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'web@somosmarea.com';
    $mail->Password = '4682Esteban4682';
    $mail->setFrom('web@somosmarea.com', 'Formulario Web');
    $mail->addAddress('web@somosmarea.com', 'Formulario Web');
    if ($mail->addReplyTo($_POST['email'], $_POST['name'])) {
        $mail->Subject = 'somosmarea.com - Contacto';
        $mail->isHTML(false);
        $mail->Body = <<<EOT
                        nombre : {$_POST['nombre']}
                        correo : {$_POST['coreo']}
                        telefono : {$_POST['telefono']}
                        empresa : {$_POST['empresa']}
                        servicios : {$_POST['servicio']}
                        mensaje : {$_POST['mensaje']}
                        EOT;
        if (!$mail->send()) {
         echo "<script>swal('Intente mas tarde', '', 'error')</script>";
        } else {
         echo "<script>swal('Mensaje Enviado', '', 'success')</script>";
        }
    } else {
           echo "<script>swal('Email invalido', '', 'success')</script>";
    }

?>