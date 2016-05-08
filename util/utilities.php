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

    $result = mysqli_query($GLOBALS["conn"], $strQuery);
    return mysqli_num_rows($result);
  }

  function insert_user($name, $lstName, $userName, $password, $email, $birthDate, $estatus )
  {
    $strQuery = " INSERT INTO usuarios ";
    $strQuery .= " ( nombre_usuario, apellido_usuario, alter_usuario, password,";
    $strQuery .= " email_usuario, nacimiento_usuario, estatus_usuario )";
    $strQuery .= " VALUES ('".$name."','".$lstName."', '".$userName."','".$password."',";
    $strQuery .= "'".$email."','".$birthDate."', '".$estatus."')";

    //echo $strQuery;
    $result = mysqli_query($GLOBALS["conn"], $strQuery);

    return $result;
  }
 ?>
