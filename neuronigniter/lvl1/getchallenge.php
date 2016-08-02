<?php
header('Access-Control-Allow-Origin: *');
$file = fopen("challenge.txt", "r")or die("Unable to open file!");
while(!feof($file))
{
  echo fgets($file)."|";
}
fclose($file);
?>
