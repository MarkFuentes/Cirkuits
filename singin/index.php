<?php
include_once("../util/utilities.php");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();
if(isset($_SESSION["user"]))
{
  header("location:".$url."dashboard");
}
else {
  $strServerMsg = "";
  if(isset($_POST["email"]))
  {
    $email    = strip_tags($_POST["email"], FILTER_SANITIZE_STRING);
    $password = strip_tags($_POST["password"], FILTER_SANITIZE_STRING);

    $strServerMsg .= $email;
    $strServerMsg .= "|";
    $strServerMsg .= $password;
    $strServerMsg .= "|";

    $strQuery = "SELECT nombre_usuario FROM usuarios WHERE email_usuario = '".$email."'";
    $result   = mysqli_query($GLOBALS["conexion"], $strQuery) or die(mysqli_error($GLOBALS["conexion"]));

    if(mysqli_num_rows($result) > 0)
    {
      $strQuery = "SELECT * FROM usuarios WHERE password = '".$password."'";
      $strQuery .= " and email_usuario ='".$email."'";
      $result = mysqli_query($GLOBALS["conexion"], $strQuery) or die(mysqli_error($GLOBALS["conexion"]));
      if(mysqli_num_rows($result) > 0)
      {
        $row = mysqli_fetch_assoc($result);
        $_SESSION["user"]       = $row;
        header("Location:".$url."dashboard");
      }
    }

    write_console($strServerMsg);
  }
}
 ?>
 <?php //CARET ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title>Cirkuits Sign in</title>
   <link rel="stylesheet" href="<?=$url;?>css/bootstrap.css" />
   <link rel="stylesheet" href="<?=$url;?>css/cirkuits.css" />
   <link rel="stylesheet" href="<?=$url;?>css/master.css" />
   <link rel="stylesheet" href="<?=$url;?>css/validationEngine.jquery.css" />
   <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
   <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet"> <!-- For banner propouses only -->
   <script src="<?=$url;?>js/jquery-1.12.3.min.js"></script>
   <script src="<?=$url;?>js/bootstrap.min.js"></script>
   <script src="<?=$url;?>js/sanitizer.js"></script>
   <script src="<?=$url;?>js/jquery-1.12.3.min.js"></script>
   <script src="<?=$url;?>js/jquery.validationEngine-es.js"></script>
   <script src="<?=$url;?>js/jquery.validationEngine.js"></script>
   <script src="<?=$url;?>js/reguser.js"></script>
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
         <a href="<?=$url;?>" class="navbar-brand"><img src="<?=$url;?>img/logo2.png" alt="Logo Cirkuits" class="img-navbar"/></a>
       </div>
       <div class="collapse navbar-collapse" id="cirkuitsNavbar">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="<?=$url;?>"><strong>Home</strong></a></li>
           <li><a href="<?=$url;?>about"><strong>Cirkuits</strong></a></li>
           <li><a href="<?=$url;?>videogames"><strong>Video Games</strong></a></li>
           <li><a href="<?=$url;?>singup"><span class="glyphicon glyphicon-user"></span> <strong>Sing Up</strong></a></li>
           <li><a href="<?=$url;?>singin"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>
         </ul>
       </div>
     </div>
   </nav>
   <div class="container-fluid">

     <div class="row">
       <div class="contenido">
         <div class="text-center">
           <h1>Sign in</h1>
         </div>
         <div class="form">
           <form action="" method="post" id="login_form">
             <div class="form form-group">
               <input type="email" class="form-control" name="email" id="email"
               data-validation-engine="validate[required, custom[email]]"
               data-errormessage-value-missing="email is required"
               data-errormessage-custom-error="Invalid, let me give you a hint: someone@nowhere.com"
               placeholder="e-mail" />
             </div>
             <div class="form form-group">
               <input type="password" class="form-control" name="password" id="passowrd"
               data-validation-engine="validate[required]"
               data-validation-engine="validate[required, custom[email]]"
               data-errormessage-value-missing="password is required"
               placeholder="password" />
             </div>
             <!--<input type="submit" name="submit" value="Sign" class="btn btn-success btn-lg">
             <br>
             <div class="" id="regLogin">
               <span>Not registred yet?</span><h3><a href="reguser.php" class="label label-success">Sign up</a></h3>
             </div>-->
           </form>
         </div>
         <div id="btn-login">
           <button type="button" name="btnLogin" id="btn-log" onclick="login()" class="btn btn-success btn-block"><h4>Sign In</h4></button>
         </div>
         <div id="regLogin">
           <span>Not registred yet?</span><h3><a href="reguser.php" class="label label-success">Sign up</a></h3>
         </div>
       </div>

     </div>

     <div class="row">
       <!-- Footer -->
       <footer class="footer col-md-12">
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
               <img src="<?=$url;?>img/index/twitter.png" alt="Twitter" />
             </div>
             <div class="img-social">
               <img src="<?=$url;?>img/index/facebook.png" alt="Facebook" />
             </div>
             <div class="img-social">
               <img src="<?=$url;?>img/index/youtube.png" alt="Youtube" />
             </div>
           </div>
         </div>
       </footer>
     </div>

   </div>
   <script type="text/javascript">
     $(document).ready( function(){ $('#login_form').validationEngine(); } );
     var login = function()
     {
       $('#login_form').submit();
     }
   </script>
 </body>
 </html>
