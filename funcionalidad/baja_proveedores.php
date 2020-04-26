<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

	$id_proveedor_baja=$_POST['id_proveedor_baja'];

	mysqli_query($connect,"DELETE FROM proveedores WHERE numprov='$id_proveedor_baja'");

	header ("location:../estructura/consulta_proveedores.php");
?>