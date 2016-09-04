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
        <div id="header" class="text-center" style="paddig:5%;">
          <h3><strong>How Cirkuits it works</strong></h3>
          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            Cirkuits opens up a revolutionary new world in language learning
            that works on the basis of neuroplasticity employed on the unconscious
            level of mental operation, in other words, “deep learning”.
            This type of learning is described in the groundbreaking Mind Map book
          </p>
          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
              <em>
              "Every time you have a thought,
              the biochemical/electromagnetic resistance along the pathway carrying that
              thought is reduced.
              It is like trying to clear a path through a forest.
              The first time is a struggle because you have to fight  your way through the undergrowth.
              The second time you travel that way will be easier because of the clearing you did on your first journey.
              The more times you travel that path, the less resistance there will be, until, after many repetitions, you have a wide, smooth track which requires little or no clearing"
            </em>
          </p>
          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            Just like the book describes, when you first start using another language, the process seems confusing and difficult, it is necessary to take your time and to go slowly,
            with enough practice structuring language this way though, we can become proficient.
            That’s where the Cirkuits method and video game come in.
          </p>
          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            Language Reflexes
            Proficient speech production for a language learner requires the ability
            to take 1-2 decisions per second (sometimes more) and to generate spoken
            words based on those decisions,
            every second of speaking represents new linguistic decisions.
            As spoken communication proceeds, that decision-making process overwhelms the language
            learner and flawed speaking is the result.
            There simply isn't enough familiarity with this system to generate proper speech consistently.  For native speakers the process is more intuitive and wholly familiar it’s like driving the streets of the city where they’ve lived all their lives. If you had to drive in a completely new city, however, getting around would be quite different.  Speaking a new language is like that, it takes time to get acquainted with and comfortable with different language routes.
            Most English learners only get to develop these inner maps <em>partially</em>.
          </p>
          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            The language reflexes required for proficient speech production are not properly created in traditional language courses,
            academic literature suggests that several months of total immersion can generate these kinds of abilities but nothing else has come close......until now!
          </p>
          <br>
          <!-- about videogame -->
          <h3><strong>Cirkuits Tense Master video game</strong></h3>

          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            Cirkuits Tense Master is a video game that replicates the decision-making process
            whenever you speak English and incorporates a critical time element
            that permits you to automate those decisions.
            The game uses a voice-recognition interface and, as  you play,
            it familiarizes and conditions you to use proper English structure.
            It was first employed in a simpler form back in 2012 in our classrooms
            and since then has been used thousands of times with our students and improved
            continuously along the way.
          </p>

          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            Cirkuits Tense Master is a video game that replicates the decision-making process
            whenever you speak English and incorporates a critical time element
            that permits you to automate those decisions.
            The game uses a voice-recognition interface and, as  you play,
            it familiarizes and conditions you to use proper English structure.
            It was first employed in a simpler form back in 2012 in our classrooms
            and since then has been used thousands of times with our students and improved
            continuously along the way.
          </p>

          <h3><strong>The first-ever reflex-building language video game</strong></h3>

          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            All of our tools and training are directed at long-term
            retention and competence. The Cirkuits system passes your
            English through a filtering process that identifies errors you’ve
            been dragging from the past and helps you to correct them with
            conditioning exercises.
            Common errors that the Cirkuits game and program help to correct are:
            <ul style="text-align:left; padding-left:15%;">
              <li>
                forgetting to use auxiliary verbs when using the negative or interrogative forms, for example:
                <ul>
                  <li>“I no have time” (incorrect)  which should be, “I don’t have time.”</li>
                </ul>
              </li>
              <li>
                forgetting to use the subject in their sentences (especially if your native tongue is Romantic)
                <ul>
                  <li>“is very good to see you” which should be, “It’s very good to see you”</li>
                </ul>
              </li>
              <li>
                confusing the pronouns
                <ul>
                  <li>
                    “I know she very well” which should be, “I know her very well”
                  </li>
                </ul>
              </li>
            </ul>
          </p>

          <br>
          <p style="text-align:left; padding-left:5%; padding-right:5%;">
            These errors are the reason the Cirkuits games were created,
            they provide a different kind of solution for communication needs.
            <br>
            <br>
            As you go through the registration and payment steps
            you will choose the right plan for you, if you are already enrolled in a
            language learning program,
            you might opt simply to sign up for our game and multimedia pack,
            however, if you want to feel the full fire of the Cirkuits program sign up
            for our Tense Master Training Pack which includes the game and multimedia
            suite but also permits you 12 hours of  monthly training with our original,
            performance-intensive training. Spaces are limited for our
            online classes so we ask for serious inquiries only,
            check the conditions and requirements here.

          </p>

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
                  <span>Fill out your info and let us know what you consider your proficiency level to be.</span><br>
                  <span>beginner</span><br>
                  <span>proficient with 5-10 verbs (in all tenses) </span><br>
                  <span>proficient with 10-19 verbs (in all tenses)</span><br>
                  <span>proficient with 20+verbs (in all tenses) </span><br>
                </p>
              </div>
             </div>
             <div class="img-dotted-left">
               <!--img src="<?=$url;?>img/index/dotted.png" alt="Conecta" />-->
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
                  <span>Fill out our secure pay form </span>
                </p>
              </div>
            </div>
            <div class="img-dotted-right">
              <!--<img src="<?=$url;?>img/index/dottedl.png" alt="Conecta" />-->
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
                  <span>Enjoy the most innovative language-learning video games ever! Along with that gain </span><br>
                  <span>free access to our multimedia suite which comes with exclusive training videos, </span><br>
                  <span>short films and more! </span>
                </p>
              </div>
            </div>
            <div class="img-dotted-left">
              <!--<img src="img/index/dotted.png" alt="Conecta" />-->
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
                  <span>Every game compiles all-time and monthly high scores that you can then share with friends. </span>
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
