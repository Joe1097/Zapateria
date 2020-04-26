<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Proveedores | Consulta</title>
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
                    <h1>Proveedores Registrados</h1>
                    <table>
                        <thead>
                            <tr>
                                <td>Número de proveedor</td>
                                <td>Nombre</td>
                                <td>Estado</td>
                                <td>Municipio</td>
                                <td>Colonia</td>
                                <td>Calle</td>
                                <td>Número</td>
                                <td>Código Postal</td>
                                <td>Teléfono</td>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        $results = mysqli_query($connect,"SELECT * FROM proveedores LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["numprov"]; ?></td>
                                <td><?php echo $row["nombre"]; ?></td>
                                <td><?php echo $row["edo"]; ?></td>
                                <td><?php echo $row["mun"]; ?></td>
                                <td><?php echo $row["col"]; ?></td>
                                <td><?php echo $row["calle"]; ?></td>
                                <td><?php echo $row["num"]; ?></td>
                                <td><?php echo $row["cp"]; ?></td>
                                <td><?php echo $row["tel"]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div>    
                <form action="../estructura/edicion_proveedores.php" method="POST" onsubmit="">
                    <p>¿Desea editar un proveedor?</p>
                    <input type="text" name="id_proveedor_editar" id="id_proveedor_editar" placeholder="Escriba aqui el id">
                    <input type="submit" value="Editar">
                </form>
                <form action="../funcionalidad/baja_proveedores.php" method="POST" onsubmit="">
                    <p>¿Desea dar de baja un proveedor?</p>
                    <input type="text" name="id_proveedor_baja" id="id_proveedor_baja" placeholder="Escriba aqui el id">
                    <input type="submit" value="Dar de baja">
                </form>  
            </div>
        </div>  
    </body>
</html>