<?php
require_once("util/DAO.php");
include_once("util/utilities.php");
if(isset($_SESSION["user_session"]))
{
  header("location:dashboard.php");
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

    write_console($strServerMsg);
  }
}
 ?>
 <?php //CARET ?>
 <!DOCTYPE html>
 <html lang="en">
 <head>
   <meta charset="UTF-8">
   <title>Cirkuits Sign in</title>
   <link rel="stylesheet" href="css/bootstrap.css" />
   <link rel="stylesheet" href="css/validationEngine.jquery.css" />
   <script src="js/sanitizer.js"></script>
   <script src="js/jquery-1.12.3.min.js"></script>
   <script src="js/jquery.validationEngine-es.js"></script>
   <script src="js/jquery.validationEngine.js"></script>
   <script src="js/reguser.js"></script>
   <script type="text/javascript">
     $(document).ready( function(){ $('#login_form').validationEngine(); } );
   </script>
 </head>
 <body>
   <div class="container container-fluid">
     <div class="header text-center">
       <h1>Sign in</h1>
       <hr>
     </div>
     <div class="form row">
       <div class="col-md-4"></div>
       <form class="col-md-4" action="login.php" method="post" id="login_form">
         <div class="form form-group">
           <input type="text" class="form-control" name="email" id="email"
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
           placeholder="****" />
         </div>
         <input type="submit" name="submit" value="Sign" class="btn btn-success btn-lg btn-block">
         <br>
         <div class="" id="regLogin">
           <span>Not registred yet?</span><h3><a href="reguser.php" class="label label-success">Sign up</a></h3>
         </div>
       </form>
       <div class="col-md-4"></div>
     </div>
   </div>
 </body>
 </html>
