<?php
  include_once("util/utilities.php");
  $strServerMsg = "";
  if(isset($_POST["name"]))
  {
    $name      = strip_tags($_POST["name"], FILTER_SANITIZE_STRING);
    $lstName   = strip_tags($_POST["lastName"], FILTER_SANITIZE_STRING);
    $userName  = strip_tags($_POST["userName"], FILTER_SANITIZE_STRING);
    $password  = strip_tags($_POST["password"], FILTER_SANITIZE_STRING);
    $email     = strip_tags($_POST["email"], FILTER_SANITIZE_STRING);
    $birthDate = strip_tags($_POST["birthDate"], FILTER_SANITIZE_STRING);

    $strServerMsg .= $name;
    $strServerMsg .= "|";
    $strServerMsg .= $lstName;
    $strServerMsg .= "|";
    $strServerMsg .= $userName;
    $strServerMsg .= "|";
    $strServerMsg .= $email;
    $strServerMsg .= "|";
    $strServerMsg .= $birthDate;
    $strServerMsg .= "|";

    write_console(check_user($userName));
    write_console($strServerMsg);

    if(check_user($userName) <= 0)
    {
      $result = insert_user($name, $lstName, $userName, $password, $email, $birthDate, 1);
      if($result > 0)
      {
        session_start();
        $_SESSION["user"] = $name;
        echo '<script>alert("Gracias por registrarte");</script>';
        header("Location:payment.php");
      }
    }
    else {
      echo '<script>alert("El nombre de usuario ya existe")</script>';
    }
  }
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cirkuits Sign up</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/validationEngine.jquery.css" />
  <script src="js/sanitizer.js"></script>
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/jquery.validationEngine-en.js"></script>
  <script src="js/jquery.validationEngine.js"></script>
  <script src="js/reguser.js"></script>
  <script type="text/javascript">
    $(document).ready( function(){ $('#reguser_form').validationEngine(); } );
  </script>
</head>
<body>
  <div class="container container-fluid">
    <div class="header text-center">
      <h1>Sign up</h1>
      <hr>
    </div>
    <div class="form row">
      <div class="col-md-4">

      </div>
      <form class="col-md-4" action="reguser.php" method="post" id="reguser_form" onsubmit="return validaForm()">
        <div class="form form-group">
          <!--<label>Name</label>-->
          <input type="text" class="form-control"
          data-validation-engine="validate[required, custom[onlyLetterSp]]"
          data-errormessage-value-missing="Name is required"
          data-errormessage-custom-error="Invalid, let me give you a hint: Andrew"
          name="name" id="name" placeholder="Name" />
        </div>
        <div class="form form-group">
          <!--<label>Last name</label>-->
          <input type="text" class="form-control"
          data-validation-engine="validate[required, custom[onlyLetterSp]]"
          data-errormessage-value-missing="Last name is required"
          data-errormessage-custom-error="Invalid, let me give you a hint: Garfield"
          name="lastName" id="lastName" placeholder="Last name" />
        </div>
        <div class="form form-group">
          <!--<label>User name</label>-->
          <input type="text" class="form-control" name="userName" id="userName"
          data-validation-engine="validate[required, , custom[onlyLetterNumber]]"
          data-errormessage-value-missing="User name is required"
          data-errormessage-custom-error="Invalid, let me give you a hint: Awwwgarfiel"
          placeholder="User name" />
        </div>
        <div class="form form-group">
          <!--<label>password</label>-->
          <input type="password" class="form-control" name="password" id="password"
          data-validation-engine="validate[required]"
          data-errormessage-value-missing="Password is required"
          placeholder="password" />
        </div>
        <div class="form form-group">
          <!--<label>E-mail</label>-->
          <input type="email" class="form-control"
          data-validation-engine="validate[required,custom[email]]"
          data-errormessage-value-missing="Email is required"
          data-errormessage-custom-error="Invalid, let me give you a hint: someone@nowhere.com"
          name="email" id="email" placeholder="E-mail" />
        </div>
        <div class="form form-group">
          <!--<label>Confirm e-mail</label>-->
          <input type="text" class="form-control" name="conEmail" id="conEmail"
          data-validation-engine="validate[required,custom[email]]"
          data-errormessage-value-missing="Email is required"
          placeholder="Confirm E-mail" />
        </div>
        <div class="form form-group">
          <!--<label>Birth Date</label>-->
          <input type="text" class="form-control datepicker"
          data-validation-engine="validate[required, custom[date]]"
          data-errormessage-value-missing="Birth date is required"
          data-errormessage-custom-error="Invalid, let me give you a hint: 1992-10-21"
          placeholder="Birthdate @Example: yyyy-mm-dd" name="birthDate" id="birthDate" />
        </div>
        <div class="checkbox">
          <!--<label>Confirm e-mail</label>-->
          <label>
            <input type="checkbox"  name="terms"
            data-validation-engine="validate[required]"
            data-errormessage-value-missing="You must accept terms and conditions"
            id="terms" value="1" />
            I accept terms and conditions.
          </label>
        </div>
        <input type="submit" name="submit" value="Register" class="btn btn-success btn-lg btn-block" />
        <br>
        <div class="" id="regLogin">
          <span>Already registred?</span><h3><a href="login.php" class="label label-success">Sign in</a></h3>
        </div>
      </form>
      <div class="col-md-4">
      </div>
    </div>
  </div>
</body>
</html>
