<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ventas | Abonos</title>
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
                    <h1>Abonos</h1>
                    <table>
                        <thead>
                            <td colspan="9" style="text-align: center; font-weight: bold;">
                                Compras a crédito
                            </tr>
                            <tr>
                                <td>Número</td>
                                <td>Nombre de cliente</td>
                                <td>Apellido paterno</td>
                                <td>Apellido materno</td>
                                <td>Total de la compra</td>
                                <td>Fecha de abono</td>
                                <td>Mensualidades acumuladas</td>
                                <td>Mensualidad</td>
                                <td>Impuesto de atraso</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $results = mysqli_query($connect,"SELECT *, (CASE WHEN fecha_abono<CURDATE() THEN pago_mensual*0.15 ELSE 0 END) AS 'impuesto' FROM compras_credito NATURAL JOIN compras NATURAL JOIN cliente WHERE pagos_acums<total");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["id"]; ?></td>
                                <td><?php echo $row["Nom_cte"]; ?></td>
                                <td><?php echo $row["App_cte"]; ?></td>
                                <td><?php echo $row["Apm_cte"]; ?></td>
                                <td><?php echo $row["total"]; ?></td>
                                <td><?php echo $row["fecha_abono"]; ?></td>
                                <td><?php echo $row["pagos_acums"]; ?></td>
                                <td><?php echo $row["pago_mensual"]; ?></td>
                                <td><?php echo $row["impuesto"]; ?></td>
                            </tr>
                        <?php
                            }   
                        ?>
                        </tbody>
                    </table>    
                </div>   

                <form action="../funcionalidad/abonos.php" method="POST" onsubmit="">
                    <p>Abonar a una compra</p>
                    <input type="text" name="num_comp_cred" id="num_comp_cred" placeholder="Número de compra a credito">
                    <input type="text" name="abono" id="abono" placeholder="Cantidad a abonar">
                    <input type="submit" value="Abonar">
                </form>

            </div>
        </div>  
    </body>
</html>