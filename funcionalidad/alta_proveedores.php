<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

	$nombre=$_POST['nombre'];
	$estado=$_POST['estado'];
	$municipio=$_POST['municipio'];
	$colonia=$_POST['colonia'];
	$calle=$_POST['calle'];
	$numero=$_POST['numero'];
	$codigo_postal=$_POST['codigo_postal'];
	$telefono=$_POST['telefono'];

	mysqli_query($connect,"INSERT INTO proveedores 
	(nombre, 
	edo, 
	mun, 
	col, 
	calle, 
	num, 
	cp, 
	tel)
	VALUES 
	('$nombre', 
	'$estado', 
	'$municipio', 
	'$colonia', 
	'$calle', 
	'$numero', 
	'$codigo_postal', 
	'$telefono')");

	header ("location:../estructura/alta_proveedores.php");
?>