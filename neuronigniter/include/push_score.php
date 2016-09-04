<?php
include_once("../../util/utilities.php");
require_once("../../util/DAO.php");
require_once("../../util/funciones.php");

$id_videogame = isset($_POST["id_videogame"]) ? $_POST["id_videogame"] : "NULL";
$id_usuario   = isset($_POST["id_usuario"]) ? $_POST["id_usuario"]     : "NULL";
$nivel        = isset($_POST["nivel"]) ? $_POST["nivel"]               : "NULL";
$score        = isset($_POST["score"]) ? $_POST["score"]               : "NULL";
$stars        = isset($_POST["estrellas"]) ? $_POST["estrellas"]       : "NULL";

/*$nivel = 1;
$id_videogame = 1;
$id_usuario = 1;
$score = 3;*/

if(iflvlExists($nivel, $id_videogame, $id_usuario))
{

  $str_get_past_score = sprintf("SELECT score FROM videogame_progress WHERE id_videogame = %s AND id_usuario = %s AND nivel = %s",
  GetSQLValueString($conexion, $id_videogame, "int"),
  GetSQLValueString($conexion, $id_usuario, "int"),
  GetSQLValueString($conexion, $nivel, "int"));

  $rs_past_score = mysqli_query($conexion, $str_get_past_score)or die(mysqli_error($conexion));
  $row_past_score = mysqli_num_rows($str_get_past_score) ?  mysqli_fetch_assoc($str_get_past_score) : NULL;


  if($score > $row_past_score["score"]){

    $str_update_level = sprintf("UPDATE videogame_progress SET score = %s, estrellas = %s WHERE id_videogame = %s AND id_usuario = %s AND nivel = %s",
    GetSQLValueString($conexion, $score, "int"),
    GetSQLValueString($conexion, $stars, "int"),
    GetSQLValueString($conexion, $id_videogame, "int"),
    GetSQLValueString($conexion, $id_usuario, "int"),
    GetSQLValueString($conexion, $nivel, "int"));

    $rs_update_lvl = mysqli_query($conexion, $str_update_level)or die(mysqli_error($conexion));

    $str_update_leaderboard = sprintf("CALL updateLeaderBoard( %s, %s, %s )",
    GetSQLValueString($conexion, $id_videogame, "int"),
    GetSQLValueString($conexion, $id_usuario, "int"),
    GetSQLValueString($conexion, $score, "int"));

    $rs_update_leaderboard = mysqli_query($conexion, $str_update_leaderboard)or die(mysqli_error($conexion));

    if(!iflvlExists(++$nivel, $id_videogame, $id_usuario))
    {
      $score = 0;
      $str_query_insert_level = sprintf("INSERT INTO videogame_progress (id_videogame, id_usuario, nivel, score)
      VALUES (%s,%s,%s,%s)",
      GetSQLValueString($conexion, $id_videogame, "int"),
      GetSQLValueString($conexion, $id_usuario, "int"),
      GetSQLValueString($conexion, $nivel, "int"),
      GetSQLValueString($conexion, $score, "int"));

      $rs_next_lvl = mysqli_query($conexion, $str_query_insert_level)or die(mysqli_error($conexion));
    }
  }

}
 ?>
