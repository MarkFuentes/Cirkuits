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
          <a href="dashboard.html" class="navbar-brand">
            <img src="img/logo2.png" alt="Cikuits Logo" />
          </a>
        </div>
        <div class="navbar-right">
          <ul class="nav navbar-nav ">
            <li><a href="subscription.html">Subscription</a></li>
            <li><a href="payment.html">Payment</a></li>
            <li><a href="javascript:logOut()"><span class="label label-danger">Exit</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="" id="userSession">
      <label for=""><h3><span>Welcome:</span>
      <span id="userName"></span></h3></label>
    </div>
    <br>
    <div class="contenidoUsuario">
      <div class="col-md-4"></div>
      <div class="col-md-4 text-center" id="userContent"></div>
      <div class="col-md-4"></div>
    </div>
  </div>
  <script>
    $(document).ready(
      $.ajax({
          url:"getUserInfo.php",
          type:"post",
          success:function(response)
          {
            $('#userContent').html(response)
          }
      }),
      $.ajax({
          url:"getUserSession.php",
          type:"post",
          success:function(response)
          {
            $('#userName').html(response)
          }
      })

    );
    function logOut() {
      alert("Saliendo...");
    }

    function cancelar()
    {
      //alert(location);
      window.location.href="index.html";
    }
  </script>
</body>
</html>
