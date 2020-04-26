<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

	$num_comp_cred=$_POST["num_comp_cred"];
	$abono=$_POST["abono"];

	mysqli_query($connect,"UPDATE compras_credito SET pagos_acums = pagos_acums + $abono, fecha_abono = DATE_ADD(CURDATE(), INTERVAL 1 MONTH) WHERE id = $num_comp_cred");

	header("location:../estructura/abonos.php")
?>