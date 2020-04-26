<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Ventas | Cobrar</title>
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
                    <h1>Cobrar</h1>               
                    <table>
                        <thead>
                            <td colspan="4" style="text-align: center; font-weight: bold;">
                                Clientes
                            </td>
                            <tr>     
                                <td>Número</td>
                                <td>Nombre</td>
                                <td>Apellido paterno</td>
                                <td>Apellido materno</td>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $results = mysqli_query($connect,"SELECT Num_cte, Nom_cte, App_cte, Apm_cte FROM cliente LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["Num_cte"]; ?></td>
                                <td><?php echo $row["Nom_cte"]; ?></td>
                                <td><?php echo $row["App_cte"]; ?></td>
                                <td><?php echo $row["Apm_cte"]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div>  

                <div class="table">
                    <table>
                        <thead>
                            <td colspan="4" style="text-align: center; font-weight: bold;">
                                Calzado
                            </td>
                            <tr>
                                <td>Número de calzado</td>
                                <td>Talla</td>
                                <td>Descripción</td>
                                <td>Costo</td>
                            </tr>
                        </thead>
                        <tbody>

                        <?php
                        $connect = mysqli_connect("localhost","proyecto","zapatito","zapateria");
                        if (!$connect) {
                            die(mysqli_error());
                        }
                        $results = mysqli_query($connect,"SELECT numzpto, talla, descr, costo FROM zapatos LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                            <tr>
                                <td><?php echo $row["numzpto"]; ?></td>
                                <td><?php echo $row["talla"]; ?></td>
                                <td><?php echo $row["descr"]; ?></td>
                                <td><?php echo $row["costo"]; ?></td>
                            </tr>
                        <?php
                            }
                        ?>
                        </tbody>
                    </table>    
                </div> 

                <form action="../funcionalidad/cobrar.php" method="POST" onsubmit="">
                    <p>Cobrar</p>
                    <input type="text" name="id_cliente" id="id_cliente" placeholder="Número de cliente">
                    <input type="text" name="num_zapato" id="num_zapato" placeholder="Número de zapato">
                    <input type="text" name="cant_pares" id="cant_pares" placeholder="Cantidad de pares" value="1">
                    <select name="meses" id="meses">
                        <option value="0" hidden>Meses a credito</option>
                        <option value="0">0 Meses (Pago de contado)</option>
                        <option value="3">3 Meses</option>
                        <option value="6">6 Meses</option>
                        <option value="12">12 Meses</option>
                        <option value="18">18 Meses</option>
                    </select>
                    <input type="submit" value="Cobrar">
                </form>  
            </div>
        </div>  
    </body>
</html>