<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

    $var_nombre=$_POST["nombre"];
    $var_apellido_paterno=$_POST["apellido_paterno"];
    $var_apellido_materno=$_POST["apellido_materno"];
    $var_estado=$_POST["estado"];
    $var_municipio=$_POST["municipio"];
    $var_colonia=$_POST["colonia"];
    $var_calle=$_POST["calle"];
    $var_numero=$_POST["numero"];
    $var_codigo_postal=$_POST["codigo_postal"];
    $var_telefono=$_POST["telefono"];

    $num_cte=$_POST['num_cte'];

    mysqli_query($connect,"UPDATE cliente 
        Set 
        Nom_cte='$var_nombre', 
        App_cte='$var_apellido_paterno', 
        Apm_cte='$var_apellido_materno',
        Edo_cte='$var_estado',
        Mun_cte='$var_municipio', 
        Col_cte='$var_colonia', 
        Call_cte='$var_calle',
        Num='$var_numero', 
        Cp=$var_codigo_postal,
        Tel=$var_telefono 
        WHERE 
        Num_cte = '$num_cte'");

    header ("location:../estructura/consulta_clientes.php");
?>