<?php
include_once("util/utilities.php");
session_start();
if(isset($_SESSION["user"]))
{
  if(isset($_SESSION["user"]["estatus_usuario"]))
  {
    if($_SESSION["user"]["estatus_usuario"] == 1)
    {
      header("Location:payment.php");
    }
    else if($_SESSION["user"]["estatus_usuario"] == 2){
      if(isset($_GET["user"]))
      {
        $strQuery = "SELECT * FROM usuarios WHERE nombre_usuario = '".$_GET["user"]."'";
        $result = mysqli_query($GLOBALS["conn"], $strQuery);
        $row = mysqli_fetch_assoc($result);
      }
      else {
        header("Location:login.php");
      }
    }
    else {
      header("location:login.php");
    }
  }

}else {
  header("Location:login.php");
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/master.css" media="screen" title="no title" charset="utf-8">
  <link rel="stylesheet" href="css/validationEngine.jquery.css" />
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/sanitizer.js"></script>
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/jquery.validationEngine-en.js"></script>
  <script src="js/jquery.validationEngine.js"></script>
  <script src="js/infouser.js"></script>
  <script type="text/javascript">
    $(document).ready( function(){ $('#updateuser_form').validationEngine(); } );
    function edit_user()
    {
      $('#name').prop('disabled', false);
      $('#lastName').prop('disabled', false);
      $('#userName').prop('disabled', false);
      $('#email').prop('disabled', false);
      $('#birthDate').prop('disabled', false);

      $('#btn-group').html(
        '<input type="submit" class="btn btn-success" value="Save" /><input type="submit" class="btn btn-success" value="Back" onclick="cancel_user()" />'
      );
    }

    function cancel_user()
    {
      $('#name').prop('disabled', true);
      $('#lastName').prop('disabled', true);
      $('#userName').prop('disabled', true);
      $('#email').prop('disabled', true);
      $('#birthDate').prop('disabled', true);

      $('#btn-group').html(
        '<input type="button" class="btn btn-success" onclick="edit_user()" value="Modificar" /><input type="button" class="btn btn-success" onclick="salir()" value="Back" />'
      );
    }

    function salir()
    {
      window.location.href="dashboard.php";
    }
  </script>
</head>
<body>
  <div class="container container-fluid">
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <div class="navbar-header">
          <a href="dashboard.php" class="navbar-brand">
            <img src="img/logo2.png" alt="Cikuits Logo" />
          </a>
        </div>
        <div class="navbar-right">
          <ul class="nav navbar-nav ">
            <li><a href="infosubscription.php">Subscription</a></li>
            <li><a href="payment.php">Payment</a></li>
            <li><a href="exit.php"><span class="label label-danger">Exit</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="" id="userSession">
      <label for="">
        <h3>
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"]["nombre_usuario"].'" >'; ?><img src="img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="100px" /></a>
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"]["nombre_usuario"].'" class="label label-primary">'; ?><span id="userName"><?php echo $_SESSION["user"]["nombre_usuario"] ?></span></a>
        </h3>
    </label>
    </div>
    <br>
    <div class="contenidoUsuario">
      <div class="col-md-4"></div>
      <div class="col-md-4 text-center" id="userContent">
        <?php
        echo '<form action="infouser.php" method="post" id="updateuser_form" onsubmit="return validaForm()">';

        echo '<div class="form form-group">';
        echo '<input type ="text" class="form-control"
        data-validation-engine="validate[required, custom[onlyLetterSp]]"
        data-errormessage-value-missing="Name is required"
        data-errormessage-custom-error="Invalid, let me give you a hint: Andrew"
        name="name" id="name"  value="'.$row["nombre_usuario"].'" disabled />';
        echo '</div>';

        echo '<div class   ="form form-group">';
        echo '<input type ="text" class="form-control"
        data-validation-engine="validate[required, custom[onlyLetterSp]]"
        data-errormessage-value-missing="Last name is required"
        data-errormessage-custom-error="Invalid, let me give you a hint: Garfield"
        name="lastName" id="lastName"  value="'.$row["apellido_usuario"].'" disabled />';
        echo '</div>';

        echo '<div class="form form-group">';
        echo '<input type="text" class="form-control"
        data-validation-engine="validate[required, custom[onlyLetterNumber]]"
        data-errormessage-value-missing="User name is required"
        data-errormessage-custom-error="Invalid, let me give you a hint: Awwwgarfiel"
        name="userName" id="userName" value="'.$row["alter_usuario"].'" disabled />';
        echo '</div>';

        echo '<div class="form form-group">';
        echo '<input type="text" class="form-control"
        data-validation-engine="validate[required,custom[email]]"
        data-errormessage-value-missing="Email is required"
        data-errormessage-custom-error="Invalid, let me give you a hint: someone@nowhere.com"
        name="email" id="email" value="'.$row["email_usuario"].'" disabled />';
        echo '</div>';

        echo '<div class   ="form form-group">';
        echo '<input type ="text" class="form-control"
        data-validation-engine="validate[required, custom[date]]"
        data-errormessage-value-missing="Birth date is required"
        data-errormessage-custom-error="Invalid, let me give you a hint: 1992-10-21"
        name="birthDate" id="birthDate"  value="'.$row["nacimiento_usuario"].'" disabled />';
        echo '</div>';

        echo '<div class="btn-group btn-group-lg" id="btn-group" role="group">';
        echo '<input type="button" class="btn btn-success" onclick="edit_user()" value="Modificar" />';
        echo '<input type="button" class="btn btn-success" onclick="salir()" value="Back" />';
        echo '</div>';

        echo '</form>';
         ?>
      </div>
      <div class="col-md-4"></div>
    </div>
  </div>
</body>
</html>
