<?php
  session_start();
  $serverName = "localhost";
  $userName = "kevin";
  $password = "drupal";
  $database = "joker_system";
  $conexion = mysqli_connect($serverName, $userName, $password, $database);
  if(!$conexion) {
    die("Conexión fallida" . mysqli_connect_error());
  }
?>