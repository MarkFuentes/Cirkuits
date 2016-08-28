<?php
include_once("../util/utilities.php");
include_once("../util/DAO.php");
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");
session_start();

$scores = array();

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
 <head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=9; IE=8; IE=7" />
   <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
   <title>Neuron Igniter</title>
   <link rel="stylesheet" href="<?=$url?>css/bootstrap.css" />
   <link rel="stylesheet" href="<?=$url?>css/cirkuits.css" />
   <link rel="stylesheet" href="<?=$url?>css/master.css" />
   <link rel="stylesheet" href="<?=$url?>css/jquery-ui.css" />
   <link rel="stylesheet" href="<?=$url;?>css/font-awesome-4.6.3/css/font-awesome.min.css">
   <link rel="stylesheet" href="<?=$url?>css/validationEngine.jquery.css" />
   <link rel="stylesheet" href="<?=$url?>neuronigniter/css/site.css" />
   <link rel="stylesheet" type="text/css" href="<?=$url?>plugins/slick/slick.css"/>
   <link rel="stylesheet" type="text/css" href="<?=$url?>plugins/slick/slick-theme.css"/>
   <link href='https://fonts.googleapis.com/css?family=Comfortaa' rel='stylesheet' type='text/css'>
   <link href="https://fonts.googleapis.com/css?family=Coiny" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Mogra" rel="stylesheet">

   <script src="<?=$url?>js/jquery-1.12.3.min.js"></script>
   <script src="<?=$url?>js/bootstrap.min.js"></script>
   <script src="<?=$url?>js/jquery-ui.js"></script>
   <script src="<?=$url?>js/jquery.validationEngine-es.js"></script>
   <script src="<?=$url?>js/jquery.validationEngine.js"></script>

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
         <a href="#" class="navbar-brand"><img src="../img/logo2.png" alt="Logo Cirkuits" class="img-navbar"/></a>
       </div>
       <div class="collapse navbar-collapse" id="cirkuitsNavbar">
         <ul class="nav navbar-nav navbar-right">
           <li><a href="<?=$url;?>dashboard"><strong>Dashboard</strong></a></li>
           <li><a href="<?=$url;?>subscription"><strong>Subscription</strong></a></li>
           <li><a href="<?=$url?>updatepayment/"><strong>Update payment</strong></a></li>
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
           <div id="nIgniterLvlSelector" class="lvlSelector">


             <!-- //// NILVEL 1 /// -->
             <div class="ilvlWrapper">
               <?php
                 $str_scores_lvl1 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 1);

                 $rs_scores_lvl1 = mysqli_query($conexion, $str_scores_lvl1);

                 $row_scores_lvl1 = mysqli_num_rows($rs_scores_lvl1) > 0 ? mysqli_fetch_assoc($rs_scores_lvl1) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 1</span>
               </div>
               <?php if($row_scores_lvl1 != NULL) { ?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl1["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl1["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper.png" alt="" />
               <?php } else {?>
                 <img src="<?=$url?>neuronigniter/images/lvlWrapperNA.png" alt="" />
               <?php }?>
             </div>



             <!-- ///// NIVEL 2 //// -->
             <div class="dlvlWrapper">
               <?php
                 $str_scores_lvl2 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 2);

                 $rs_scores_lvl2 = mysqli_query($conexion, $str_scores_lvl2);

                 $row_scores_lvl2 = mysqli_num_rows($rs_scores_lvl2) > 0 ? mysqli_fetch_assoc($rs_scores_lvl2) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 2</span>
               </div>
               <?php if($row_scores_lvl2 != NULL){ ?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl2["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl2["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper2.png" alt="" />
               <?php } else { ?>
                 <img src="<?=$url?>neuronigniter/images/lvlWrapper2NA.png" alt="" />
               <?php }?>
             </div>



             <!-- //// NIVEL 3 /// -->
             <div class="ilvlWrapper">
               <?php
                 $str_scores_lvl3 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 3);

                 $rs_scores_lvl3 = mysqli_query($conexion, $str_scores_lvl3);

                 $row_scores_lvl3 = mysqli_num_rows($rs_scores_lvl3) > 0 ? mysqli_fetch_assoc($rs_scores_lvl3) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 3</span>
               </div>
               <?php if($row_scores_lvl3 != NULL){ ?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl3["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl3["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper.png" alt="" />
               <?php } else { ?>
                 <img src="<?=$url?>neuronigniter/images/lvlWrapperNA.png" alt="" />
               <?php }?>
             </div>


             <!-- //// NIVEL 4 -->
             <div class="dlvlWrapper">
               <?php
                 $str_scores_lvl4 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 4);

                 $rs_scores_lvl4 = mysqli_query($conexion, $str_scores_lvl4);

                 $row_scores_lvl4 = mysqli_num_rows($rs_scores_lvl4) > 0 ? mysqli_fetch_assoc($rs_scores_lvl4) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 4</span>
               </div>
               <?php if($row_scores_lvl4 != NULL ){ ?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl4["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl4["score"]?></span>
                </div>
               </div>
              <img src="<?=$url?>neuronigniter/images/lvlWrapper2.png" alt="" />
              <?php } else {?>
                <img src="<?=$url?>neuronigniter/images/lvlWrapper2NA.png" alt="" />
              <?php } ?>
             </div>




             <!-- /// NIVEL 5 /// -->
             <div class="ilvlWrapper">
               <?php
                 $str_scores_lvl5 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 5);

                 $rs_scores_lvl5 = mysqli_query($conexion, $str_scores_lvl5);

                 $row_scores_lvl5 = mysqli_num_rows($rs_scores_lvl5) > 0 ? mysqli_fetch_assoc($rs_scores_lvl5) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 5</span>
               </div>
               <?php if($row_scores_lvl5 != NULL ){?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl5["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl5["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper.png" alt="" />
               <?php }else{?>
               <img src="<?=$url?>neuronigniter/images/lvlWrapperNA.png" alt="" />
               <?php }?>
             </div>



             <!-- //// NIVEL 6 //// -->
             <div class="dlvlWrapper">
               <?php
                 $str_scores_lvl6 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 6);

                 $rs_scores_lvl6 = mysqli_query($conexion, $str_scores_lvl6);

                 $row_scores_lvl6 = mysqli_num_rows($rs_scores_lvl6) > 0 ? mysqli_fetch_assoc($rs_scores_lvl6) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 6</span>
               </div>
               <?php if($row_scores_lvl6 != NULL) {?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl6["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl6["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper2.png" alt="" />
               <?php } else {?>
                 <img src="<?=$url?>neuronigniter/images/lvlWrapper2NA.png" alt="" />
               <?php }?>
             </div>




             <!-- //// NIVEL 7 /// -->
             <div class="ilvlWrapper">
               <?php
                 $str_scores_lvl7 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 7);

                 $rs_scores_lvl7 = mysqli_query($conexion, $str_scores_lvl7);

                 $row_scores_lvl7 = mysqli_num_rows($rs_scores_lvl7) > 0 ? mysqli_fetch_assoc($rs_scores_lvl7) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 7</span>
               </div>
               <?php if($row_scores_lvl7 != NULL){ ?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl7["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl7["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper.png" alt="" />
               <?php }else{?>
                 <img src="<?=$url?>neuronigniter/images/lvlWrapperNA.png" alt="" />
               <?php }?>
             </div>




             <!-- //// NIVEL 8 /// -->
             <div class="dlvlWrapper">
               <?php
                 $str_scores_lvl8 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 8);

                 $rs_scores_lvl8 = mysqli_query($conexion, $str_scores_lvl8);

                 $row_scores_lvl8 = mysqli_num_rows($rs_scores_lvl8) > 0 ? mysqli_fetch_assoc($rs_scores_lvl8) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 8</span>
               </div>
               <?php if($row_scores_lvl8 != NULL) {?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl8["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl8["score"]?></span>
                </div>
               </div>
              <img src="<?=$url?>neuronigniter/images/lvlWrapper2.png" alt="" />
              <?php }else{?>
                <img src="<?=$url?>neuronigniter/images/lvlWrapper2NA.png" alt="" />
              <?php } ?>
             </div>





             <!-- //// NIVEL 9 //// -->
             <div class="ilvlWrapper">
               <?php
                 $str_scores_lvl9 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 9);

                 $rs_scores_lvl9 = mysqli_query($conexion, $str_scores_lvl9);

                 $row_scores_lvl9 = mysqli_num_rows($rs_scores_lvl9) > 0 ? mysqli_fetch_assoc($rs_scores_lvl9) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 9</span>
               </div>
               <?php if($row_scores_lvl9 != NULL) {?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl9["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl9["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper.png" alt="" />
               <?php } else { ?>
                 <img src="<?=$url?>neuronigniter/images/lvlWrapperNA.png" alt="" />
               <?php }?>
             </div>





             <!-- //// NIVEL 10 //// -->
             <div class="dlvlWrapper">
               <?php
                 $str_scores_lvl10 = sprintf("SELECT * FROM videogame_progress WHERE id_usuario = %s AND id_videogame = %s AND nivel = %s",
                 $_SESSION["user"]["id_usuario"],
                 1,
                 10);

                 $rs_scores_lvl10 = mysqli_query($conexion, $str_scores_lvl10);

                 $row_scores_lvl10 = mysqli_num_rows($rs_scores_lvl10) > 0 ? mysqli_fetch_assoc($rs_scores_lvl10) : NULL;
               ?>
               <div class="lvlTitle">
                 <span>Level 10</span>
               </div>
               <?php if($row_scores_lvl10 != NULL) {?>
               <div class="lvlSumarry">
                <div class="starContainer">
                  <span class="ico"><i class="fa fa-star" aria-hidden="true"></i></span>
                  <span><?=$row_scores_lvl10["estrellas"]?></span>
                </div>
                <div class="scoreContainer">
                  <span class="ico"><i class="fa fa-trophy" aria-hidden="true"></i></span>
                  <span>X<?=$row_scores_lvl10["score"]?></span>
                </div>
               </div>
               <img src="<?=$url?>neuronigniter/images/lvlWrapper2.png" alt="" />
               <?php } else { ?>
                 <img src="<?=$url?>neuronigniter/images/lvlWrapper2NA.png" alt="" />
               <?php }?>
             </div>


           </div>

           <!--<div class="arrow-paginator">
              <ul>
                  <li class="prev"><i class="fa fa-angle-left" aria-hidden="true"></i></i></li>
                  <li class="next"><i class="fa fa-angle-right" aria-hidden="true"></i></li>
              </ul>
          </div>-->


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
   <script type="text/javascript" src="<?=$url?>plugins/slick/slick.min.js"></script>

   <script type="text/javascript">
   $(document).ready(function(){
      $('.lvlSelector').slick({
        arrows:true,
        adaptiveHeight:true,
        slidesToShow: 2,
        initialSlide: 0,
        responsive: [{

            breakpoint: 1024,
            settings: {
              slidesToShow: 1,
              infinite: true
            }

          }, {

            breakpoint: 600,
            settings: {
              slidesToShow: 1,
            }

          }, {

            breakpoint: 300,
            settings: "unslick" // destroys slick

          }],
        speed: 500
      });
    });
   </script>


 </body>
 </html>
