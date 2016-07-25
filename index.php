<?php
include_once("util/DAO.php");
include_once("util/utilities.php");
session_start();
if(isset($_SESSION["user"]))
{
  header("location:".$url."dashboard");
}
$query_pricing = sprintf("SELECT * FROM cat_precios");
$result_pricing = mysqli_query($conexion,$query_pricing);
$row_pricing = mysqli_fetch_assoc($result_pricing);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
  <title>Cirkuits</title>
  <link rel="stylesheet" href="<?=$url;?>css/bootstrap.css" />
  <link rel="stylesheet" href="<?=$url;?>css/cirkuits.css" />
  <link rel="stylesheet" href="<?=$url;?>css/font-awesome-4.6.3/css/font-awesome.min.css">
  <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet"> <!-- For banner propouses only -->
  <script src="<?=$url;?>js/jquery-1.12.3.min.js"></script>
  <script src="<?=$url;?>js/bootstrap.min.js"></script>
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
        <a href="<?=$url;?>" class="navbar-brand"><img src="img/logo2.png" alt="Logo Cirkuits" class="img-navbar"/></a>
      </div>
      <div class="collapse navbar-collapse" id="cirkuitsNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="<?=$url;?>"><strong>Home</strong></a></li>
          <li><a href="<?=$url;?>about"><strong>Cirkuits</strong></a></li>
          <li><a href="<?=$url;?>videogames"><strong>Video Games</strong></a></li>
          <li><a href="<?=$url;?>singup"><span class="glyphicon glyphicon-user"></span> <strong>Sing Up</strong></a></li>
          <li><a href="<?=$url;?>singin"><span class="glyphicon glyphicon-log-in"></span> <strong>Login</strong></a></li>
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
            <div class="time-line-izq">
              <div class="img-time-line">
                  <!--<img src="img/index/register.png" alt="Register" />-->
                <h3 style="color:#00c1d5;"><i class="fa fa-users" aria-hidden="true"></i></h3>
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
             <div class="img-dotted-left">
               <img src="<?=$url;?>img/index/dotted.png" alt="Conecta" />
             </div>
            </div>
            <div class="row">
            <div class="time-line-der">
              <div class="img-time-line">
                <!--<img src="img/index/pay.png" alt="Payment" />-->
                <h3 style="color:#49c5b1;"><i class="fa fa-credit-card" aria-hidden="true"></i></h3>
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
            <div class="img-dotted-right">
              <img src="<?=$url;?>img/index/dottedl.png" alt="Conecta" />
            </div>
          </div>
          <div class="row">
            <div class="time-line-izq">
              <div class="img-time-line">
                <!--<img src="img/index/play.png" alt="Play" />-->
                <h3><i class="fa fa-gamepad" aria-hidden="true"></i></h3>
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
            <div class="img-dotted-left">
              <img src="img/index/dotted.png" alt="Conecta" />
            </div>
          </div>
          <div class="row">
            <div class="time-line-der">
              <div class="img-time-line">
                <!--<img src="img/index/level_clear.png" alt="Achivements" />-->
                <h3 style="color:#FFEB3B;"><i class="fa fa-trophy" aria-hidden="true"></i></h3>
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
    <div class="row row-price">
      <div class="text-center">
        <h3><strong>Pricing</strong></h3>
      </div>
      <div class="price-tag">
        <span><h3>Annual Billing</h3></span>
        <hr>
        <span><strong>$ <?= $row_pricing["precio"] ?> MXN</strong></span>
        <hr>
        <a href="<?=$url;?>singup" class="buy-btn label label-success">Buy</a>
      </div>
      <div class="price-tag">
        <?php $row_pricing = mysqli_fetch_assoc($result_pricing); ?>
        <span><h3>Monthly Billing</h3></span>
        <hr>
        <span><strong>$ <?= $row_pricing["precio"] ?> MXN</strong></span>
        <hr>
        <a href="<?=$url;?>singup" class="buy-btn label label-success">Buy</a>
      </div>
    </div>
    <div class="row">
      <!-- Footer -->
      <footer class="footer col-md-12" style="position:relative">
        <div class="row">
          <div class="foot-section" id="contacto">
            <span>+52 777 123 45 67</span>
            <br>
            <span>example@domain.com.mx</span>
            <br>
            <span>postal code: 63866</span>
            <br>
          </div>
          <div class="foot-section" id="copyright">
            <span>2016 Cirkuits all rights reserved &copy;</span>
            <br>
          </div>
          <div class="foot-section" id="social-1">
              <a href="http://www.twitter.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-twitter" aria-hidden="true"></i></span></a>
              <a href="http://www.facebook.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-facebook" aria-hidden="true"></i></span></a>
              <a href="http://www.youtube.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-youtube" aria-hidden="true"></i></span></a>
              <a href="http://www.instagram.com" target="_blank"><span style="font-size:28pt; color:#FFF;"><i class="fa fa-instagram" aria-hidden="true"></i></span></a>
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
      var SCREEN_HEIGHT = $(window).height();
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
