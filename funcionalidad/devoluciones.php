<?php
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

$var_id_zapato=$_POST["id_zapato"];
$var_id_cliente=$_POST["id_cliente"];

mysqli_query($connect,"INSERT INTO devoluciones(
    numzpto,
    num_cte,
    fecha)
    VALUES(
    '$var_id_zapato',
    '$var_id_cliente',
    CURDATE()
    )"
);

mysqli_query($connect,"UPDATE zapatos SET exis_actual = exis_actual+1 WHERE numzpto=$var_id_zapato");

header("location:../estructura/devoluciones.php");

?>