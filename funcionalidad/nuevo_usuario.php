<?php
    include_once '../Clases/conexion.php';

    $var_usuario=$_POST["usuario"];
    $var_contrasena=$_POST["contrasena"];
    $var_tipo=$_POST["tipo"];

    mysqli_query($connect,"INSERT INTO usuario(
    nombre,
    contrasena,
    tipo)
    VALUES(
    '$var_usuario',
    '$var_contrasena',
    '$var_tipo')");

    header("location:../estructura/index.html");
?>