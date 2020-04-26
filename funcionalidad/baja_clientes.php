<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

    $varid=$_POST['id_cliente_baja'];

    mysqli_query($connect,"DELETE FROM cliente WHERE num_cte = '$varid'");

    header ("location:../estructura/consulta_clientes.php");

?>