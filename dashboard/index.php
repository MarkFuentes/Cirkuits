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
  <html lang="en">
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
    <link rel="stylesheet" href="<?=$url;?>css/font-awesome-4.6.3/css/font-awesome.min.css">
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
            <br>
            <br>
            <h1>Dashboard</h1>
          </div>

          <div class="row row-thumb">
            <div class="game-preview-container">
              <div>
                <h3>Neuron igniter</h3>
              </div>
              <div class="bg-layer">
                <p>

                </p>
              </div>
              <div class="game-preview-video">
                <video preload="preload" id="video" autoplay="autoplay" loop="loop" muted>
                  <source src="<?=$url;?>img/videos/game_play.mp4" type="video/mp4"></source>
                  <source src="<?=$url;?>img/videos/game_play.m4v" type="video/m4v"></source>
                </video>
                <div class="game-preview-msg">
                  <span style="font-size: 5em;">
                    <?php if($_SESSION["uprogressv1"]["nivel"] <= 0) {  ?>
                      <i class="fa fa-lock" aria-hidden="true"></i>
                    <?php }else { ?>
                      <a href="#" style="color:#FFF"><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
                    <?php } ?>
                  </span>
                </div>
              </div>
              <div class="row userProgress">
                <h3>lvl&nbsp;<?php echo $_SESSION["uprogressv1"]["nivel"] <= 0 ? "LOCKED" : $_SESSION["uprogressv1"]["nivel"];//row_user_progress_v1["nivel"] <= 0 ?  "N/A" : $row_user_progress_v1["nivel"]; ?></h3>
                <div class="userProgressText">
                  <span>Progreso</span>
                </div>
                <div class="progress userProgressBar">
                  <?php
                   $nivelActual = $_SESSION["uprogressv1"]["nivel"];//$row_user_progress_v1["nivel"];
                   $totalNiveles = $_SESSION["uprogressv1"]["niveles"];//$row_user_progress_v1["niveles"];
                   $mathHelper = $nivelActual * 100;
                   $percentage = $mathHelper / $totalNiveles;
                  ?>
                   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= (int)$percentage; ?>"
                   aria-valuemin="0" aria-valuemax="100" style="width:<?= $percentage; ?>%">
                   </div>
                 </div>
               </div>
            </div>
            <div class="game-preview-container">
              <div>
                <h3>Neuron shooter</h3>
              </div>
              <div class="bg-layer">
                <p>

                </p>
              </div>
              <div class="game-preview-video">
                <video preload="preload" id="video" autoplay="autoplay" loop="loop" muted>
                  <source src="<?=$url;?>img/videos/game_play.mp4" type="video/mp4"></source>
                  <source src="<?=$url;?>img/videos/game_play.m4v" type="video/m4v"></source>
                </video>
                <div class="game-preview-msg">
                  <span style="font-size: 5em;">
                    <?php if($_SESSION["uprogressv2"]["nivel"] <= 0) {  ?>
                      <i class="fa fa-lock" aria-hidden="true"></i>
                    <?php }else { ?>
                      <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                    <?php } ?>
                  </span>
                </div>
              </div>
              <div class="row userProgress">
                <h3>lvl&nbsp;<?php echo $_SESSION["uprogressv2"]["nivel"] <= 0 ? "Locked" : $_SESSION["uprogressv1"]["nivel"];//row_user_progress_v1["nivel"] <= 0 ?  "N/A" : $row_user_progress_v1["nivel"]; ?></h3>
                <div class="userProgressText">
                  <span>Progreso</span>
                </div>
                <div class="progress userProgressBar">
                  <?php
                   $nivelActual = $_SESSION["uprogressv2"]["nivel"];//$row_user_progress_v1["nivel"];
                   $totalNiveles = $_SESSION["uprogressv2"]["niveles"];//$row_user_progress_v1["niveles"];
                   $mathHelper = $nivelActual * 100;
                   $percentage = $mathHelper / $totalNiveles;
                  ?>
                   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= (int)$percentage; ?>"
                   aria-valuemin="0" aria-valuemax="100" style="width:<?= $percentage; ?>%">
                   </div>
                 </div>
               </div>
            </div>
            <div class="game-preview-container">
              <div>
                <h3>Neuron mapper</h3>
              </div>
              <div class="bg-layer">
                <p>

                </p>
              </div>
              <div class="game-preview-video">
                <video preload="preload" id="video" autoplay="autoplay" loop="loop" muted>
                  <source src="<?=$url;?>img/videos/game_play.mp4" type="video/mp4"></source>
                  <source src="<?=$url;?>img/videos/game_play.m4v" type="video/m4v"></source>
                </video>
                <div class="game-preview-msg">
                  <span style="font-size: 5em;">
                    <?php if($_SESSION["uprogressv3"]["nivel"] <= 0) {  ?>
                      <i class="fa fa-lock" aria-hidden="true"></i>
                    <?php }else { ?>
                      <i class="fa fa-play-circle-o" aria-hidden="true"></i>
                    <?php } ?>
                  </span>
                </div>
              </div>
              <div class="row userProgress">
                <h3>lvl&nbsp;<?php echo $_SESSION["uprogressv3"]["nivel"] <= 0 ? "Locked" : $_SESSION["uprogressv1"]["nivel"];//row_user_progress_v1["nivel"] <= 0 ?  "N/A" : $row_user_progress_v1["nivel"]; ?></h3>
                <div class="userProgressText">
                  <span>Progreso</span>
                </div>
                <div class="progress userProgressBar">
                  <?php
                   $nivelActual = $_SESSION["uprogressv3"]["nivel"];//$row_user_progress_v1["nivel"];
                   $totalNiveles = $_SESSION["uprogressv3"]["niveles"];//$row_user_progress_v1["niveles"];
                   $mathHelper = $nivelActual * 100;
                   $percentage = $mathHelper / $totalNiveles;
                  ?>
                   <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="<?= (int)$percentage; ?>"
                   aria-valuemin="0" aria-valuemax="100" style="width:<?= $percentage; ?>%">
                   </div>
                 </div>
               </div>
            </div>
            </div>
          </div>
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
              <a href="http://www.twitter.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
              <a href="http://www.facebook.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
              <a href="http://www.youtube.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-youtube" aria-hidden="true"></i></span></a>
              <a href="http://www.instagram.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
            </div>
          </div>
        </footer>
      </div>
    </div>
    <script>

    </script>
  </body>
  </html>
