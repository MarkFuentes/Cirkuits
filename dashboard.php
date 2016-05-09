<?php
  include_once("util/utilities.php");
  session_start();
  if(isset($_SESSION["user"]))
  {
    if(isset($_SESSION["estatus"]))
    {
      if($_SESSION["estatus"] == 1)
      {
        header("Location:payment.php");
      }
      else if($_SESSION["estatus"] == 2){
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
  <!------Construct 2 ----------->

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
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"].'" >'; ?><img src="img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="100px" /></a>
          <?php echo '<a href="infouser.php?user='.$_SESSION["user"].'" class="label label-primary">'; ?><span id="userName"><?php echo $_SESSION["user"] ?></span></a>
        </h3>
    </label>
    </div>
    <br>
    <div id="c2canvasdiv" style="margin: 0 auto; width: 854px; height: 480px;">

      <!-- The canvas the project will render to.  If you change its ID, don't forget to change the
      ID the runtime looks for in the jQuery ready event (above). -->
      <canvas id="c2canvas" width="854" height="480">
        <!-- This text is displayed if the visitor's browser does not support HTML5.
        You can change it, but it is a good idea to link to a description of a browser
        and provide some links to download some popular HTML5-compatible browsers. -->
        Your browser does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
        <br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
        <a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
        <a href="http://www.google.com/chrome/">Google Chrome</a><br/>
        <a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
        <a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/>
      </canvas>

    </div>
  </div>
  <script src="jquery-2.1.1.min.js"></script>
  <script src="pathfind.js"></script>

  <script src="c2runtime.js"></script>

    <script>
		// Size the canvas to fill the browser viewport.
		jQuery(window).resize(function() {
			cr_sizeCanvas(jQuery(window).width(), jQuery(window).height());
		});

		// Start the Construct 2 project running on window load.
		jQuery(document).ready(function ()
		{
			// Create new runtime using the c2canvas
			cr_createRuntime("c2canvas");
		});

		// Pause and resume on page becoming visible/invisible
		function onVisibilityChanged() {
			if (document.hidden || document.mozHidden || document.webkitHidden || document.msHidden)
				cr_setSuspended(true);
			else
				cr_setSuspended(false);
		};

		document.addEventListener("visibilitychange", onVisibilityChanged, false);
		document.addEventListener("mozvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("webkitvisibilitychange", onVisibilityChanged, false);
		document.addEventListener("msvisibilitychange", onVisibilityChanged, false);

		if (navigator.serviceWorker && navigator.serviceWorker.register)
		{
			// Register an empty service worker to trigger web app install banners.
			navigator.serviceWorker.register("sw.js", { scope: "./" });
		}
    </script>
</body>
</html>
