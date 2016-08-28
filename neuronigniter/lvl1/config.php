<?php
header('Access-Control-Allow-Origin: *');
session_start();
//echo $_SESSION["user"]["alter_usuario"]."|";
//echo "Mark"."|";
if(isset($_SESSION["user"]))
{
  echo $_SESSION["user"]["alter_usuario"];
}else {
  echo "Unknown user";
}
echo "|";
$file = fopen("config.txt", "r")or die("Unable to open file!");
while(!feof($file))
{
  echo fgets($file)."|";
}
//echo $_SESSION["user"]["id_usuario"];
echo "1";
fclose($file);
?>
