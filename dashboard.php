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
  <!--- Construct 2 ----->
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
          <?php echo '<a href="infouser.php?u='.base64_encode($_SESSION["user"]["nombre_usuario"]).'" >'; ?><img src="img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="100px" /></a>
          <?php echo '<a href="infouser.php?u='.base64_encode($_SESSION["user"]["nombre_usuario"]).'" class="label label-primary">'; ?><span id="lblUserName"><?php echo $_SESSION["user"]["nombre_usuario"] ?></span></a>
        </h3>
    </label>
    </div>
    <br>
    <!-- HERE GOES THE VIDEO GAME -->
    <div class="">

    </div>
  </div>
</body>
</html>
