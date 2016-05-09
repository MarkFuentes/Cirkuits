<?php
include_once("util/utilities.php");
session_start();
if(isset($_SESSION["user"]))
{

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
      <label for=""><h3><span>Welcome:</span>
      <span id="userName"></span></h3></label>
    </div>
    <br>
    <div class="contenidoSubscription">
      <div class="col-md-2"></div>
      <div class="col-md-8 text-center" id="subscriptionContent">
        <div id="endDate">

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
