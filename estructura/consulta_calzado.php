<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Calzado | Consultas</title>
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
                    <h1>Calzado Registrado</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Número de calzado</td>
                                <td>Marca</td>
                                <td>Modelo</td>
                                <td>Talla</td>
                                <td>Descripción</td>
                                <td>Costo</td>
                                <td>Proveedor</td>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $results = mysqli_query($connect,"SELECT numzpto, marca, modelo, talla, descr, costo, nombre FROM zapatos z INNER JOIN proveedores p ON z.numprov = p.numprov LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["numzpto"]; ?></td>
                                <td><?php echo $row["marca"]; ?></td>
                                <td><?php echo $row["modelo"]; ?></td>
                                <td><?php echo $row["talla"]; ?></td>
                                <td><?php echo $row["descr"]; ?></td>
                                <td><?php echo $row["costo"]; ?></td>
                                <td><?php echo $row["nombre"]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div>    
    
                <form action="../estructura/edicion_calzado.php" method="POST" onsubmit="">
                    <p>¿Desea editar un calzado?</p>
                    <input type="text" name="id_zapato_editar" id="id_zapato_editar" placeholder="Escriba aqui el id">
                    <input type="submit" value="Editar">
                </form>
                <form action="../funcionalidad/baja_calzado.php" method="POST" onsubmit="">
                    <p>¿Desea dar de baja un calzado?</p>
                    <input type="text" name="id_zapato_baja" id="id_zapato_baja" placeholder="Escriba aqui el id">
                    <input type="submit" value="Dar de baja">
                </form>  
            </div>
        </div>  
    </body>
</html>