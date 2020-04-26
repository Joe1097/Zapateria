<?php

  $nombre_host="localhost";
  $nombre_usuario="proyecto";
  $contrasena_bd="zapatito";
  $nombre_bd="zapateria";

  $connect = mysqli_connect($nombre_host,$nombre_usuario,$contrasena_bd,$nombre_bd);

  if (!$connect) {
    die(mysqli_error());
  }

?>
