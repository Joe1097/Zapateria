<?php 

	session_start();
	error_reporting(0);
	$var_session=$_SESSION['usuario'];
	if($var_session==null || $var_session='')
	{
		echo "Usted no tiene autorizacion para entrar a esta pagina";
		die();
	}

?>