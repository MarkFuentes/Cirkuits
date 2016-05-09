<?php
include_once("util/utilities.php");
session_start();
$strServerMsg = "";

if(isset($_SESSION["user"]))
{
  if(isset($_POST["name"]))
  {
    $name       = strip_tags(filter_var($_POST["name"], FILTER_SANITIZE_STRING));
    $lstName    = strip_tags(filter_var($_POST["lastName"], FILTER_SANITIZE_STRING));
    $cardNumber = strip_tags(filter_var($_POST["cardNumber"], FILTER_SANITIZE_STRING));
    $cardMonth  = strip_tags(filter_var($_POST["cardValidMonth"], FILTER_SANITIZE_NUMBER_INT));
    $cardYear   = strip_tags(filter_var($_POST["cardValidYear"], FILTER_SANITIZE_NUMBER_INT));
    $cvc        = strip_tags(filter_var($_POST["cvc"], FILTER_SANITIZE_NUMBER_INT));

    $strServerMsg .= $name;
    $strServerMsg .= "|";
    $strServerMsg .= $lstName;
    $strServerMsg .= "|";
    $strServerMsg .= $cardNumber;
    $strServerMsg .= "|";
    $strServerMsg .= $cardMonth;
    $strServerMsg .= "|";
    $strServerMsg .= $cardYear;
    $strServerMsg .= "|";
    $strServerMsg .= $cvc;
    $strServerMsg .= "|";

    write_console($strServerMsg);

    if(check_card_number($cardNumber) <= 0)
    {
      insert_tarjeta($name, $lstName, $cardNumber, $cardMonth, $cardYear, $cvc);
      echo '<script>alert("Tarjeta registrada con exito");</script>';
      session_start();
      $_SESSION["active_card"] = 1;
    }
    else {
      echo '<script>alert("Ya hay una tarjeta registrada con ese numero")</script>';
    }

  }
}
else {
  header("Location:login.php");
}

 ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.css"  />
  <link rel="stylesheet" href="css/master.css" />
  <link rel="stylesheet" href="css/validationEngine.jquery.css"  />
  <script src="js/sanitizer.js"></script>
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/jquery.validationEngine-es.js"></script>
  <script src="js/jquery.validationEngine.js"></script>
  <script src="js/regpayment.js"></script>
  <script>
  $(document).ready( function(){ $('#regpayment_form').validationEngine(); } );
    function salir()
    {
      window.location.href = "dashboard.php";
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
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"].'">'; ?><img src="img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="100px" /></a>
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"].'" class="label label-primary">'; ?><span id="userName"><?php  echo $_SESSION["user"] ?></span></a>
        </h3>
    </label>
    </div>
    <br>
    <div class="contenidoPayment">
      <div class="col-md-4"></div>
      <div class="col-md-4 text-center" id="paymentContent">
        <h3>Payment</h3>
        <form action="payment.php" method="post" id="regpayment_form" onsubmit="return validaForm()">
          <div class="form form-group">
            <input type="text" class="form-control" data-validation-engine="validate[required, custom[onlyLetterSp]]"
             data-errormessage-value-missing="Name is required"
             data-errormessage-custom-error="Invalid, let me give you a hint: Andrew"
             name="name" id="name" placeholder="Name"/>
          </div>
          <div class="form form-group">
            <input type="text" class="form-control" name="lastName" id="lastName"
             data-validation-engine="validate[required, custom[onlyLetterSp]]"
             data-errormessage-value-missing="Last name is required"
             data-errormessage-custom-error="Invalid, let me give you a hint: Garfield"
             placeholder="Last name" />
          </div>
          <div class="form form-group">
            <input type="text" class="form-control" name="cardNumber" id="cardNumber"
            data-validation-engine="validate[required, custom[number]]"
            data-errormessage-value-missing="Card number is required"
            data-errormessage-custom-error="Invalid, let me give you a hint: 5504909923086138"
            placeholder="Card number" />
          </div>
          <div class="form form-group">
            <input type="number" class="form-control" id="cardValidMonth"
            data-validation-engine="validate[required, custom[number]]"
            data-errormessage-value-missing="Month is required"
            data-errormessage-custom-error="Invalid, let me give you a hint: 01"
             name="cardValidMonth" placeholder="MM" />
            <input type="number" class="form-control" id="cardValidYear"
            data-validation-engine="validate[required, custom[number]]"
            data-errormessage-value-missing="Year is required"
            data-errormessage-custom-error="Invalid, let me give you a hint: 20"
            name="cardValidYear" placeholder="YY" />
          </div>
          <div class="form form-group">
            <input type="text" class="form-control" name="cvc" id="cvc"
             data-validation-engine="validate[required, custom[number], length[0,2]]"
             data-errormessage-value-missing="cvc is required"
             data-errormessage-custom-error="Invalid, let me give you a hint: 000"
             placeholder="cvc" />
          </div>
          <div class="btn-group btn-group-lg" role="group">
            <input type="submit" class="btn btn-success" value="Add" />
            <input type="button" class="btn btn-success" onclick="salir()" value="Back" />
          </div>
          <br>
        </form>
    </div>
    <div class="col-md-4"></div>
  </div>
</body>
</html>
