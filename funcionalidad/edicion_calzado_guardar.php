<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

    $var_marca=$_POST["marca"];
    $var_modelo=$_POST["modelo"];
    $var_talla=$_POST["talla"];
    $var_descripcion=$_POST["descr"];
    $var_costo=$_POST["costo"];
    $var_numprov=$_POST["numprov"];
    $existencias_act=$_POST["existencias_act"];
    $max_existencias=$_POST["max_existencias"];

    $num_zap=$_POST['numzpto'];

    mysqli_query($connect,"UPDATE zapatos 
    SET 
    marca='$var_marca', 
    modelo=$var_modelo, 
    talla=$var_talla,
    descr='$var_descripcion', 
    costo=$var_costo, 
    numprov=$var_numprov,
    existencias=$max_existencias,
    exis_actual=$existencias_act
    WHERE 
    numzpto='$num_zap'");

    header ("location:../estructura/consulta_calzado.php");
?>