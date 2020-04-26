<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

    $var_marca=$_POST["marca"];
    $var_modelo=$_POST["modelo"];
    $var_talla=$_POST["talla"];
    $var_descripcion=$_POST["descr"];
    $var_costo=$_POST["costo"];
    $var_numprov=$_POST["numprov"];
    $var_costo=$_POST["costo"];
    $existencias_act=$_POST["existencias_act"];
    $max_existencias=$_POST["max_existencias"];

    mysqli_query($connect,"INSERT INTO zapatos(
        marca,
        modelo,
        talla,
        descr,
        costo,
        numprov,
        existencias,
        exis_actual
        )
        VALUES(
        '$var_marca',
        $var_modelo,
        $var_talla,
        '$var_descripcion',
        $var_costo,
        $var_numprov,
        $max_existencias,
        $existencias_act
        )"
    );

    header("location:../estructura/alta_calzado.php")
?>