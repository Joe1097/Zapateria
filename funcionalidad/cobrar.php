<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

    $calzado=$_POST['num_zapato'];
    $pares=$_POST['cant_pares'];
    $cliente=$_POST['id_cliente'];
    $meses=$_POST['meses'];

    $tipo_pago="";

    if($meses==0){
        $tipo_pago="contado";
    }
    else{
        $tipo_pago="credito";
    }

    mysqli_query($connect,"INSERT INTO compras(
        num_cte,
        tpago,
        total,
        fecha_compra           
        )
        VALUES(
        $cliente,
        '$tipo_pago',
        ((SELECT costo FROM zapatos WHERE numzpto = $calzado)*$pares),
        CURDATE()
        )"
    );

    $ultimo_id=mysqli_insert_id($connect);

    $cero=0;

    if($meses!=0){
        mysqli_query($connect,"INSERT INTO compras_credito(
            numcpra,
            fecha_abono,
            pago_mensual,
            pagos_acums
            )
            VALUES(
            $ultimo_id,
            DATE_ADD(CURDATE(), INTERVAL 1 MONTH),
            ((SELECT costo FROM zapatos WHERE numzpto = $calzado)/$meses),
            $cero
            )"
        );
    }

    mysqli_query($connect,"INSERT INTO comprazapato(
        numzpto,
        numcpra,
        cantidad
        )
        VALUES(
        $calzado,
        $ultimo_id,
        $pares
        )"
    );

    mysqli_query($connect,"UPDATE zapatos SET exis_actual = exis_actual - 1 WHERE numzpto = $calzado");

    header("location:../estructura/cobrar.php")
?>