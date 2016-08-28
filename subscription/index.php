<?php
include_once("../util/utilities.php");
include_once("../util/DAO.php");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
if(isset($_SESSION["user"]))
{
  if(isset($_SESSION["user"]["estatus_usuario"]))
  {
    if($_SESSION["user"]["estatus_usuario"] == 1)
    {
      header("Location:".$url."payment");
    }
    else if($_SESSION["user"]["estatus_usuario"] == 2){
      $str_pago = sprintf("SELECT * FROM pago where id_usuario = %s ORDER BY fecha DESC",
      $_SESSION["user"]["id_usuario"]);

      $rs_pago = mysqli_query($conexion, $str_pago);

      $row_pago = mysqli_num_rows($rs_pago) > 0 ? mysqli_fetch_assoc($rs_pago) : NULL;

      $date_year = substr($row_pago["fecha"], 0, 4);
      $date_month = substr($row_pago["fecha"], 5, 2);
      $date_day = substr($row_pago["fecha"], 8, 2);

      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';
      echo '<br>';

      var_dump($date_year);
      var_dump($date_month);
      var_dump($date_day);




      $dateToday = date("Y-m-d");

      $today_year = substr($dateToday, 0, 4);
      $today_month = substr($dateToday, 5, 2);
      $today_day = substr($dateToday, 8, 2);

      var_dump($today_year);
      var_dump($today_month);
      var_dump($today_day);

      if($date_year == $today_year)
      {

      }else {
        unset($_SESSION["user"]);
        header("location:".$url."singin");
      }

    }
    else {
      header("location:".$url."singin");
    }
  }
}else {
  header("location:".$url."singin");
}
 ?>

 <!DOCTYPE html>
 <html lang="en" manifest="offline.appcache">
 <head>
   <!-- Standardised web app manifest -->
   <meta charset="UTF-8">
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title>SUBSCRIPTION</title>
   <link rel="manifest" href="appmanifest.json" />
   <link rel="stylesheet" href="<?=$url;?>css/bootstrap.css" />
   <link rel="stylesheet" href="<?=$url;?>css/cirkuits.css" />
   <link rel="stylesheet" href="<?=$url;?>css/master.css" />
   <link rel="stylesheet" href="<?=$url;?>css/jquery-ui.css" />
   <link rel="stylesheet" href="<?=$url;?>css/font-awesome-4.6.3/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=$url;?>css/validationEngine.jquery.css" />
   <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
   <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
   <script src="<?=$url;?>js/jquery-1.12.3.min.js"></script>
   <script src="<?=$url;?>js/bootstrap.min.js"></script>
   <script src="<?=$url;?>js/jquery-ui.js"></script>
   <script src="<?=$url;?>js/jquery.validationEngine-es.js"></script>
   <script src="<?=$url;?>js/jquery.validationEngine.js"></script>

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
         <a href="<?=$url;?>dashboard" class="navbar-brand"><img src="<?=$url;?>img/logo2.png" alt="Logo Cirkuits" class="img-navbar"/></a>
       </div>
       <div class="collapse navbar-collapse" id="cirkuitsNavbar">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="<?=$url;?>dashboard"><strong>Dashboard</strong></a></li>
           <li><a href="<?=$url;?>subscription"><strong>Subscription</strong></a></li>
           <li><a href="#"><strong>Update payment</strong></a></li>
           <li><a href="<?=$url;?>profile"> <img src="<?=$url;?>img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="32px" style="top:-10px" /> </a></li>
           <li><a href="<?=$url;?>profile"><strong><?php echo $_SESSION["user"]["alter_usuario"] ?></strong></a></li>
           <li><a href="<?=$url;?>exit.php"><span class="label label-danger">Log out</span></a></li>
         </ul>
       </div>
     </div>
   </nav>
   <div class="container-fluid">
     <div class="row">
       <div class="contenido">
         <div class="text-center">
           <br>
           <h1>Subscription</h1>
         </div>
       </div>
       <div id="subscription" class="text-center">
         <div id="endDate" class="text-center">
          <p style="padding-top:30px">
            Su subscripción se renovará automáticamente <strong>16.05.16.</strong> Se le cargará dinero MXN <strong>99.00cf</strong>
          </p>
        </div>
        <div id="service" class="text-center">
          <h3>Producto</h3>
          <br>
          <img src="<?=$url;?>img/product.png" class="img-thumbnail" alt="product.png" />
        </div>
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
             <a href="http://www.twitter.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
             <a href="http://www.facebook.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
             <a href="http://www.youtube.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-youtube" aria-hidden="true"></i></span></a>
             <a href="http://www.instagram.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
           </div>
         </div>
       </footer>
     </div>
   </div>
   <script>

   </script>
 </body>
 </html>
