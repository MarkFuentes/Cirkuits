<?php
  include("DAO.php");
  function write_console($strMsg)
  {
    echo '<script>console.log("'.$strMsg.'")</script>';
  }

  function check_user($userName)
  {
    $strQuery = "SELECT nombre_usuario FROM usuarios WHERE alter_usuario = '";
    $strQuery .= $userName;
    $strQuery .= "'";

    $result = mysqli_query($GLOBALS["conexion"], $strQuery);
    return mysqli_num_rows($result);
  }

  function insert_user($name, $lstName, $userName, $password, $email, $birthDate, $estatus, $fecha )
  {
    $strQuery = " INSERT INTO usuarios ";
    $strQuery .= " ( nombre_usuario, apellido_usuario, alter_usuario, password,";
    $strQuery .= " email_usuario, nacimiento_usuario, estatus_usuario, fecha_registro )";
    $strQuery .= " VALUES ('".$name."','".$lstName."', '".$userName."','".$password."',";
    $strQuery .= "'".$email."','".$birthDate."', '".$estatus."','".$fecha."')";

    echo $strQuery;
    $result = mysqli_query($GLOBALS["conexion"], $strQuery);

    return $result;
  }

  function check_card_number($cardNumber)
  {
    $strQuery = "SELECT nombre_tarjeta FROM payment WHERE numero_tarjeta='".$cardNumber."'";
    $result = mysqli_query($GLOBALS["conexion"], $strQuery);
    return mysqli_num_rows($result);
  }

  function insert_tarjeta($name, $lstName, $cardNumber, $cardMonth, $cardYear, $cvc, $userId )
  {
    $strQuery = " INSERT INTO payment ";
    $strQuery .= " (  nombre_tarjeta, ap_tarjeta, numero_tarjeta,  	mes_tarjeta, ";
    $strQuery .= " anio_tarjeta, cvc_tarjeta )";
    $strQuery .= " VALUES ('".$name."','".$lstName."',".$cardNumber.",'".$cardMonth."','".$cardYear."','".$cvc."')";

    $strQuery2 = "UPDATE usuarios SET estatus_usuario=2 WHERE id_usuario='".$userId."'";
    //echo $strQuery;

    $result = mysqli_query($GLOBALS["conexion"], $strQuery);

    return $result;
  }
 ?>
