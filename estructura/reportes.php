<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ventas | Reportes</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../estilos/estilos_consulta.css">
    </head>
    <body>
        <header>
            <ul>
                <li class="lis">
                    <img src="../imagenes/user.png" alt="">
                </li>
                <li class="lis">
                    <a class="user"> <?php echo $_SESSION['usuario']; ?></a>
                    <ul>
                        <li><a href="cuenta_nueva.html">Crear cuenta</a></li>
                        <li><a href="../funcionalidad/cerrar_sesion.php">Cerrar Sesión</a></li>
                    </ul> 
                </li>
                <li class="lis">
                    <a>Ventas</a>
                    <ul>
                        <li><a href="cobrar.php">Cobrar</a></li>
                        <li><a href="abonos.php">Abonos</a></li>
                        <li><a href="reportes.php">Reportes</a></li>
                        <li><a href="devoluciones.php">Devoluciones</a></li>
                    </ul>
                </li>
                <li class="lis">
                    <a>Calzado</a>
                    <ul>
                        <li><a href="consulta_calzado.php">Consultas</a></li>
                        <li><a href="alta_calzado.php">Altas</a></li>
                        <li><a href="consulta_calzado.php">Bajas</a></li>
                        <li><a href="consulta_calzado.php">Modificaciones</a></li>
                    </ul>
                </li>
                <li class="lis">
                    <a>Clientes</a>
                    <ul>
                        <li><a href="consulta_clientes.php">Consultas</a></li>
                        <li><a href="alta_clientes.php">Altas</a></li>
                        <li><a href="consulta_clientes.php">Bajas</a></li>
                        <li><a href="consulta_clientes.php">Modificaciones</a></li>
                    </ul>
                </li>
                <li class="lis">
                    <a>Proveedores</a>
                    <ul>
                        <li><a href="consulta_proveedores.php">Consultas</a></li>
                        <li><a href="alta_proveedores.php">Altas</a></li>
                        <li><a href="consulta_proveedores.php">Bajas</a></li>
                        <li><a href="consulta_proveedores.php">Modificaciones</a></li>
                    </ul>
                </li>
                <li class="lis">
                    
                </li>
                <li class="lis">
                    <a href="menu_principal.php"><img src="../imagenes/menu.png" alt=""></a>
                </li>
            </ul>
        </header>
        <div class="all">
            <div class="main">
                <div class="table">
                    <h1>Corte del día</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Número de venta</td>
                                <td>Número de cliente</td>
                                <td>Tipo de pago</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $results = mysqli_query($connect,"SELECT * FROM compras WHERE fecha_compra = CURDATE() LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["numcpra"]; ?></td>
                                <td><?php echo $row["num_cte"]; ?></td>
                                <td><?php echo $row["tpago"]; ?></td>
                                <td><?php echo $row["total"]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div>    
                 
                <div class="table">
                    <h1>Corte del mes</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Número de venta</td>
                                <td>Número de cliente</td>
                                <td>Tipo de pago</td>
                                <td>Total</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $results = mysqli_query($connect,"SELECT * FROM compras WHERE MONTH(fecha_compra) = MONTH(CURDATE()) LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["numcpra"]; ?></td>
                                <td><?php echo $row["num_cte"]; ?></td>
                                <td><?php echo $row["tpago"]; ?></td>
                                <td><?php echo $row["total"]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div>    

                <div class="table">
                    <h1>Reporte de Inventario</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Número de zapato</td>
                                <td>Marca</td>
                                <td>Modelo</td>
                                <td>Descripción</td>
                                <td>Costo</td>
                                <td>Existencias</td>
                                <td>Existencias actuales</td>
                                <td>Ausencias</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $results = mysqli_query($connect,"SELECT numzpto, marca, modelo, descr, costo, existencias, exis_actual, (existencias-exis_actual) AS 'ausencias' FROM zapatos LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["numzpto"]; ?></td>
                                <td><?php echo $row["marca"]; ?></td>
                                <td><?php echo $row["modelo"]; ?></td>
                                <td><?php echo $row["descr"]; ?></td>
                                <td><?php echo $row["costo"]; ?></td>
                                <td><?php echo $row["existencias"]; ?></td>
                                <td><?php echo $row["exis_actual"]; ?></td>
                                <td><?php echo $row["ausencias"]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div>   


                <div class="table">
                    <h1>Estados de cuenta</h1>
                    <table>
                        <thead>
                            <tr>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td></td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $results = mysqli_query($connect,"");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                                <td><?php echo $row[""]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div>   

            </div>
        </div>  
    </body>
</html>