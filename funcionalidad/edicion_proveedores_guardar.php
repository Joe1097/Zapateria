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
    $telefono=['telefono'];

    $num_prov=$_POST['id_proveedor_editar'];

    mysqli_query($connect,"UPDATE proveedores 
    SET 
    nombre='$nombre', 
    edo='$estado', 
    mun='$municipio',
    col='$colonia',
    calle='$calle', 
    num='$numero', 
    cp='$codigo_postal',
    tel='$telefono' 
    WHERE 
    numprov = '$num_prov'");

    header ("location:../estructura/consulta_proveedores.php");
?>