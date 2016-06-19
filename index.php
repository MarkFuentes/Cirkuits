<?php
include_once("util/utilities.php");
if(isset($_SESSION["user_session"]))
{
  header("location:dashboard.php");
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Cirkuits</title>
  <link rel="stylesheet" href="css/bootstrap.css" />
  <link rel="stylesheet" href="css/cirkuits.css" />
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet"> <!-- For banner propouses only -->
  <script src="js/jquery-1.12.3.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
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
        <a href="#" class="navbar-brand"><img src="img/logo2.png" alt="Logo Cirkuits" class="img-navbar"/></a>
      </div>
      <div class="collapse navbar-collapse" id="cirkuitsNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="#"><strong>Home</strong></a></li>
          <li><a href="#"><strong>Cirkuits</strong></a></li>
          <li><a href="#"><strong>Video Games</strong></a></li>
          <li><a href="#"><span class="glyphicon glyphicon-user"></span> <strong>Sing Up</strong></a></li>
          <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container-fluid">
    <div class="row">
      <!-- Video row -->
      <div class="video-container">
        <div class="slider-container">
          <div class="slide" id="slide-1">
            <span class="slide-header">Cirkuits</span>
            <br>
            <span class="slide-body">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</span>
          </div>
        </div>
        <div id="video">
        </div>
      </div>
    </div>
    <div class="row">
      <!-- Content -->
      <div class="content">
        <div id="header" class="text-center">
          <h3><strong>How Cirkuits it works</strong></h3>
        </div>
          <div class="row">
            <div class="col-md-12 time-line-izq">
              <div class="img-time-line">
                <img src="img/index/register.png" alt="Register" />
              </div>
              <div class="txt-time-line">
                <h3><strong>Register</strong></h3>
                <p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste reiciendis dolore atque delectus, totam voluptates cum quasi laudantium ab cupiditate quia reprehenderit error itaque deleniti explicabo distinctio odio ipsum earum!</span>
                  <span>Ad, consequatur, itaque! Quo cumque ex dolores explicabo repellendus id laudantium ut. Dignissimos fuga ipsa, sed velit illum perferendis fugiat numquam temporibus vitae maiores dolores consectetur assumenda, doloremque excepturi quis.</span>
                  <span>Recusandae quas amet odio animi, accusamus. Sapiente officia ad nostrum voluptas, maxime expedita sunt. Temporibus repudiandae quia explicabo! Unde magnam libero, qui fuga culpa illum quis numquam omnis error laudantium.</span>
                </p>
              </div>
             </div>
            </div>
            <div class="row">
            <div class="col-md-12 time-line-der">
              <div class="img-time-line">
                <img src="img/index/pay.png" alt="Payment" />
              </div>
              <div class="txt-time-line">
                <h3><strong>Pay</strong></h3>
                <p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste reiciendis dolore atque delectus, totam voluptates cum quasi laudantium ab cupiditate quia reprehenderit error itaque deleniti explicabo distinctio odio ipsum earum!</span>
                  <span>Ad, consequatur, itaque! Quo cumque ex dolores explicabo repellendus id laudantium ut. Dignissimos fuga ipsa, sed velit illum perferendis fugiat numquam temporibus vitae maiores dolores consectetur assumenda, doloremque excepturi quis.</span>
                  <span>Recusandae quas amet odio animi, accusamus. Sapiente officia ad nostrum voluptas, maxime expedita sunt. Temporibus repudiandae quia explicabo! Unde magnam libero, qui fuga culpa illum quis numquam omnis error laudantium.</span>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 time-line-izq">
              <div class="img-time-line">
                <img src="img/index/play.png" alt="Play" />
              </div>
              <div class="txt-time-line">
                <h3><strong>Play</strong></h3>
                <p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste reiciendis dolore atque delectus, totam voluptates cum quasi laudantium ab cupiditate quia reprehenderit error itaque deleniti explicabo distinctio odio ipsum earum!</span>
                  <span>Ad, consequatur, itaque! Quo cumque ex dolores explicabo repellendus id laudantium ut. Dignissimos fuga ipsa, sed velit illum perferendis fugiat numquam temporibus vitae maiores dolores consectetur assumenda, doloremque excepturi quis.</span>
                  <span>Recusandae quas amet odio animi, accusamus. Sapiente officia ad nostrum voluptas, maxime expedita sunt. Temporibus repudiandae quia explicabo! Unde magnam libero, qui fuga culpa illum quis numquam omnis error laudantium.</span>
                </p>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12 time-line-der">
              <div class="img-time-line">
                <img src="img/index/level_clear.png" alt="Achivements" />
              </div>
              <div class="txt-time-line">
                <h3><strong>Share your achievements</strong></h3>
                <p>
                  <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste reiciendis dolore atque delectus, totam voluptates cum quasi laudantium ab cupiditate quia reprehenderit error itaque deleniti explicabo distinctio odio ipsum earum!</span>
                  <span>Ad, consequatur, itaque! Quo cumque ex dolores explicabo repellendus id laudantium ut. Dignissimos fuga ipsa, sed velit illum perferendis fugiat numquam temporibus vitae maiores dolores consectetur assumenda, doloremque excepturi quis.</span>
                  <span>Recusandae quas amet odio animi, accusamus. Sapiente officia ad nostrum voluptas, maxime expedita sunt. Temporibus repudiandae quia explicabo! Unde magnam libero, qui fuga culpa illum quis numquam omnis error laudantium.</span>
                </p>
              </div>
            </div>
          </div>
      </div>
    </div>
    <div class="row">
      <!-- Footer -->
      <footer class="footer col-md-12">
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
              <img src="img/index/twitter.png" alt="Twitter" />
            </div>
            <div class="img-social">
              <img src="img/index/facebook.png" alt="Facebook" />
            </div>
            <div class="img-social">
              <img src="img/index/youtube.png" alt="Youtube" />
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script type="text/javascript">
    var sliderWidth = 0;
    $(document).ready(function(){
      insertBanner();
    });

    $(window).resize(function(){
      insertBanner();
    });

    var insertBanner = function()
    {
      console.log("change"); //Debug !warning
      var SCREEN_WIDTH = $(window).width();
      var SCREEN_HEIGHT = $(window).width();
      //Getting and setting the banner
      if(SCREEN_WIDTH >= 360 )
      {
        console.log("standar desktop| width" + SCREEN_WIDTH); //Debug !warning
        var bannerVideo = '<video autoplay = "true" loop ="true" muted id = "video-teaser">';
        bannerVideo    += '<source src =" img/videos/video_promo.mp4" type = "video/mp4" />Your browser does not suppor video tag</video>';
        $('#video').html(bannerVideo);
      }else {
        console.log("hi def desktop| width" + SCREEN_WIDTH); //Debug !warning
        var banner = '<div id="banner" class="header-banner"></div>';
        $('#video').html(banner);
      }
      //Getting and changing the banner width
      sliderWidth  = $('#video-teaser').width();
      console.log(sliderWidth); //Debug !warning

      $('.slider-container').width(sliderWidth*3+"px");
      $('.slide').width(sliderWidth+"px");
    }

  </script>
</body>
</html>
