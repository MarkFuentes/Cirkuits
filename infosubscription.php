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
  <script src="js/jquery-1.12.3.min.js"></script>
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
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"]["nombre_usuario"].'">'; ?><img src="img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="100px" /></a>
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"]["nombre_usuario"].'" class="label label-primary">'; ?><span id="userName"><?php  echo $_SESSION["user"]["nombre_usuario"] ?></span></a>
        </h3>
    </label>
    </div>
    <br>
    <div class="contenidoSubscription">
      <div class="col-md-2"></div>
      <div class="col-md-8 text-center" id="subscriptionContent">
        <div id="endDate">
          <p style="padding-top:30px">
            Su subscripción se renovará automáticamente <strong>16.05.16.</strong> Se le cargará dinero MXN <strong>99.00cf</strong>
          </p>
        </div>
        <br>
        <br>
        <div id="service">
          <br>
          <br>
          <label>Producto</label>
          <br>
          <img src="img/logo.png" class="img-thumbnail" alt="product.png" />
        </div>
      </div>
      <div class="col-md-2"></div>
    </div>
  </div>
</body>
</html>
