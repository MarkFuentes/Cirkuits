<?php
  include_once("../util/utilities.php");
  session_start();
  $strServerMsg = "";

  if(!isset($_SESSION["user"]))
  {
    header("Location:../login.php");
  }
 ?>
 <!DOCTYPE html>
 <html lang="en" manifest="offline.appcache">
 <head>
   <meta charset="UTF-8">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title>Neuron Mapper</title>
   <link rel="manifest" href="appmanifest.json" />
   <link rel="stylesheet" href="../css/bootstrap.css" />
   <link rel="stylesheet" href="../css/cirkuits.css" />
   <link rel="stylesheet" href="../css/master.css" />
   <link rel="stylesheet" href="../css/jquery-ui.css" />
   <link rel="stylesheet" href="../css/validationEngine.jquery.css" />
   <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
   <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
   <script src="../js/jquery-1.12.3.min.js"></script>
   <script src="../js/bootstrap.min.js"></script>
   <script src="../js/jquery-ui.js"></script>
   <script src="../js/jquery.validationEngine-es.js"></script>
   <script src="../js/jquery.validationEngine.js"></script>

 </head>
 <body>
   <nav class="navbar navbar-default navbar-fixed-top menu">
     <div class="container-fluid">
       <div class="navbar-header">
         <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#cirkuitsNavbar">
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
           <span class="icon-bar"></span>
         </button>
         <a href="#" class="navbar-brand"><img src="../img/logo2.png" alt="Logo Cirkuits" class="img-navbar"/></a>
       </div>
       <div class="collapse navbar-collapse" id="cirkuitsNavbar">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="../dashboard.php"><strong>Dashboard</strong></a></li>
           <li><a href="../infosubscription.php"><strong>Subscription</strong></a></li>
           <li><a href="<?=$url?>updatepayment/"><strong>Update payment</strong></a></li>
           <li><a href="../infouser.php?u=<?php echo base64_encode($_SESSION["user"]["nombre_usuario"])?>"> <img src="../img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="32px" style="top:-10px" /> </a></li>
           <li><a href="../infouser.php?u=<?php echo base64_encode($_SESSION["user"]["nombre_usuario"])?>"><strong><?php echo $_SESSION["user"]["alter_usuario"] ?></strong></a></li>
           <li><a href="../exit.php"><span class="label label-danger">Log out</span></a></li>
         </ul>
       </div>
     </div>
   </nav>
   <div class="container-fluid">
     <div class="row">
       <div class="contenido">
         <div class="text-center">
           <h1>Neuron Mapper</h1>
         </div>
       </div>
       <div id="c2canvasdiv">
         <canvas id="c2canvas" width="854" height="480">
     			<!-- This text is displayed if the visitor's browser does not support HTML5.
     			You can change it, but it is a good idea to link to a description of a browser
     			and provide some links to download some popular HTML5-compatible browsers. -->
     			<h1>Your browser does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
     			<br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
     			<a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
     			<a href="http://www.google.com/chrome/">Google Chrome</a><br/>
     			<a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
     			<a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/></h1>
     		</canvas>
       </div>
     </div>
     <div class="row">
       <!-- Footer -->
       <footer class="footer col-md-12" style="position:relative">
         <div class="row">
           <div class="foot-section col-md-4" id="contacto">
             <span>+52 777 123 45 67</span>
             <br>
             <span>example@domain.com.mx</span>
             <br>
             <span>postal code: 63866</span>
             <br>
           </div>
           <div class="foot-section col-md-4" id="copyright">
             <span>2016 Cirkuits all rights reserved &copy;</span>
             <br>
           </div>
           <div class="foot-section social" id="social-1">
             <div class="img-social">
               <img src="../img/index/twitter.png" alt="Twitter" />
             </div>
             <div class="img-social">
               <img src="../img/index/facebook.png" alt="Facebook" />
             </div>
             <div class="img-social">
               <img src="../img/index/youtube.png" alt="Youtube" />
             </div>
           </div>
         </div>
       </footer>
     </div>
   </div>
   <script src="jquery-2.1.1.min.js"></script>
   <script src="c2runtime.js"></script>
   <script>
   jQuery(window).resize(function() {
     cr_sizeCanvas(jQuery(window).width(), jQuery(window).height());
   });

   // Start the Construct 2 project running on window load.
   jQuery(document).ready(function ()
   {
     // Create new runtime using the c2canvas
     cr_createRuntime("c2canvas");
   });

   // Pause and resume on page becoming visible/invisible
   function onVisibilityChanged() {
     if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
       cr_setSuspended(true);
     else
       cr_setSuspended(false);
   };

   document.addEventListener("visibilitychange", onVisibilityChanged, false);
   document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
   document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
   document.addEventListener("msvisibilitychange", onVisibilityChanged, false);

   if (navigator.serviceWorker && navigator.serviceWorker.register)
   {
     // Register an empty service worker to trigger web app install banners.
     navigator.serviceWorker.register("sw.js", { scope: "./" });
   }
   </script>
 </body>
 </html>
