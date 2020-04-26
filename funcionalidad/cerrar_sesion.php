<?php
    include_once '../Clases/sesion.php';
	
	session_destroy();

	header("location:../estructura/index.html");
?>