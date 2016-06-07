<?php
  header('Access-Control-Allow-Origin: *');
  //First identify in wih time we are: 1(morning), 2(afternoon), 3(evening), 4(night)
  switch((isset($_GET["i"]) ? $_GET["i"] : 0))
  {
    //once we identify our time, we must identify the in wich neuron we are
    case 1:
      switch ((isset($_GET["n"]) ? $_GET["n"] : 0)) {
        case 1:
        echo 'morning one';
        break;
        case 2:
        echo 'morning two';
        break;
        case 3:
        echo 'morning three';
        break;
        case 4:
        echo 'morning four';
        break;
        case 5:
        echo 'morning five';
        break;
        case 6:
        echo 'morning six';
        break;
        case 7:
        echo 'morning seven';
        break;
        case 8:
        echo 'morning eight';
        break;
        case 9:
        echo 'morning nine';
        break;
        default:
        break;
      }
      break;
    case 2:
    switch ((isset($_GET["n"]) ? $_GET["n"] : 0)) {
      case 1:
      echo 'afternoon one';
      break;
      case 2:
      echo 'afternoon two';
      break;
      case 3:
      echo 'afternoon three';
      break;
      case 4:
      echo 'afternoon four';
      break;
      case 5:
      echo 'afternoon five';
      break;
      case 6:
      echo 'afternoon six';
      break;
      case 7:
      echo 'afternoon seven';
      break;
      case 8:
      echo 'afternoon eight';
      break;
      case 9:
      echo 'afternoon nine';
      break;
      default:
      break;
    }
      break;
    case 3:
    switch ((isset($_GET["n"]) ? $_GET["n"] : 0)) {
      case 1:
      echo 'evening one';
      break;
      case 2:
      echo 'evening two';
      break;
      case 3:
      echo 'evening three';
      break;
      case 4:
      echo 'evening four';
      break;
      case 5:
      echo 'evening five';
      break;
      case 6:
      echo 'evening six';
      break;
      case 7:
      echo 'evening seven';
      break;
      case 8:
      echo 'evening eight';
      break;
      case 9:
      echo 'evening nine';
      break;
      default:
      break;
    }
      break;
    case 4:
    switch ((isset($_GET["n"]) ? $_GET["n"] : 0)) {
      case 1:
      echo 'night one';
      break;
      case 2:
      echo 'night two';
      break;
      case 3:
      echo 'night three';
      break;
      case 4:
      echo 'night four';
      break;
      case 5:
      echo 'night five';
      break;
      case 6:
      echo 'night six';
      break;
      case 7:
      echo 'night seven';
      break;
      case 8:
      echo 'night eight';
      break;
      case 9:
      echo 'night nine';
      break;
      default:
      break;
    }
      break;
    default:
    break;
  }
 ?>
