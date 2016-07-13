<?php
  include_once("../util/utilities.php");
  header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
  header("Cache-Control: post-check=0, pre-check=0", false);
  header("Pragma: no-cache");
  session_start();
  if(isset($_SESSION["user"]))
  {
    if(isset($_SESSION["user"]["estatus_usuario"]))
    {
      if($_SESSION["user"]["estatus_usuario"] == 1)
      {
        header("Location:".$url."payment");
      }
      else if($_SESSION["user"]["estatus_usuario"] == 2){
      }
      else {
        header("location:".$url."singin");
      }
    }
  }else {
    header("location:".$url."singin");
  }
 ?>
  <!DOCTYPE html>
  <html lang="en" manifest="offline.appcache">
  <head>
    <!-- Standardised web app manifest -->
    <meta charset="UTF-8">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>DASHBOARD</title>
    <link rel="manifest" href="appmanifest.json" />
    <link rel="stylesheet" href="<?=$url;?>css/bootstrap.css" />
    <link rel="stylesheet" href="<?=$url;?>css/cirkuits.css" />
    <link rel="stylesheet" href="<?=$url;?>css/master.css" />
    <link rel="stylesheet" href="<?=$url;?>css/jquery-ui.css" />
    <link rel="stylesheet" href="<?=$url;?>css/validationEngine.jquery.css" />
    <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
    <script src="<?=$url;?>js/jquery-1.12.3.min.js"></script>
    <script src="<?=$url;?>js/bootstrap.min.js"></script>
    <script src="<?=$url;?>js/jquery-ui.js"></script>
    <script src="<?=$url;?>js/jquery.validationEngine-es.js"></script>
    <script src="<?=$url;?>js/jquery.validationEngine.js"></script>

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
          <a href="<?=$url;?>dashboard" class="navbar-brand"><img src="<?=$url;?>img/logo2.png" alt="Logo Cirkuits" class="img-navbar"/></a>
        </div>
        <div class="collapse navbar-collapse" id="cirkuitsNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="<?=$url;?>dashboard"><strong>Dashboard</strong></a></li>
            <li><a href="<?=$url;?>subscription"><strong>Subscription</strong></a></li>
            <li><a href="#"><strong>Update payment</strong></a></li>
            <li><a href="<?=$url;?>profile"> <img src="<?=$url;?>img/avatars/person-flat.png" alt="avatar.png" class="img img-rounded" width="32px" style="top:-10px" /> </a></li>
            <li><a href="<?=$url;?>profile"><strong><?php echo $_SESSION["user"]["alter_usuario"] ?></strong></a></li>
            <li><a href="<?=$url;?>exit.php"><span class="label label-danger">Log out</span></a></li>
          </ul>
        </div>
      </div>
    </nav>
    <div class="container-fluid">
      <div class="row">
        <div class="contenido">
          <div class="text-center">
            <h1>Dashboard</h1>
          </div>
        </div>
        <div id="c2canvasdiv">
          <canvas id="c2canvas" width="400" height="480">
      			<!-- This text is displayed if the visitor's browser does not support HTML5.
      			You can change it, but it is a good idea to link to a description of a browser
      			and provide some links to download some popular HTML5-compatible browsers. -->
      			<h1>Your browser does not appear to support HTML5.  Try upgrading your browser to the latest version.  <a href="http://www.whatbrowser.org">What is a browser?</a>
      			<br/><br/><a href="http://www.microsoft.com/windows/internet-explorer/default.aspx">Microsoft Internet Explorer</a><br/>
      			<a href="http://www.mozilla.com/firefox/">Mozilla Firefox</a><br/>
      			<a href="http://www.google.com/chrome/">Google Chrome</a><br/>
      			<a href="http://www.apple.com/safari/download/">Apple Safari</a><br/>
      			<a href="http://www.google.com/chromeframe">Google Chrome Frame for Internet Explorer</a><br/></h1>
      		</canvas>
        </div>
      </div>
      <div class="row">
        <!-- Footer -->
        <footer class="footer col-md-12" style="position:relative">
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
    <script src="jquery-2.1.1.min.js"></script>
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
