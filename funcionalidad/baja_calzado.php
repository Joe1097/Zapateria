<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

	$id_zap=$_POST["id_zapato_baja"];

	mysqli_query($connect,"DELETE FROM zapatos WHERE numzpto = '$id_zap'");

	header ("location:../estructura/consulta_calzado.php");
?>