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

    mysqli_query($connect,"INSERT INTO cliente(
        Nom_cte,
        App_cte,
        Apm_cte,
        Edo_cte,
        Mun_cte,
        Col_cte,
        Call_cte,
        Num,
        Cp,
        Tel)
        VALUES(
        '$var_nombre',
        '$var_apellido_paterno',
        '$var_apellido_materno',
        '$var_estado',
        '$var_municipio',
        '$var_colonia',
        '$var_calle',
        '$var_numero',
        '$var_codigo_postal',
        '$var_telefono')"
    );

    header("location:../estructura/alta_clientes.php")
?>