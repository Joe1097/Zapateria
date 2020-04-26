<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Calzado | Altas</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../estilos/estilos_alta.css">
        <script text/javascript src=""></script>
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
                <form method="POST" action="../funcionalidad/alta_calzado.php">
                    <h1>Alta de calzado</h1>
                    <p>Ingrese los datos del calzado a dar de alta</p>
                    <input type="text" name="marca" id="marca" placeholder="Marca">
                    <input type="text" name="modelo" id="modelo" placeholder="Modelo">
                    <input type="text" name="talla" id="talla" placeholder="Talla">
                    <input type="text" name="descr" id="descr" placeholder="Descripción">
                    <input type="text" name="costo" id="costo" placeholder="Costo">
                    
                    <select name="numprov"  id="numprov">
                        <option hidden"> Proveedor</option>

                        <?php
                        $results = mysqli_query($connect,"SELECT numprov, nombre FROM proveedores LIMIT 50");
                        while($row = mysqli_fetch_array($results)) {
                        ?>
                        
                        <option value="<?php echo $row["numprov"]; ?>"><?php echo $row["nombre"]; ?></option>

                        <?php
                            }
                        ?>

                    </select>
                    <input type="text" name="max_existencias" id="max_existencias" placeholder="Máximo de existencias">
                    <input type="text" name="existencias_act" id="existencias_act" placeholder="Existencias actuales">
                    <input type="submit" value="Dar de alta">
                    <input type="reset" value="Limpiar">
                </form>
            </div>
        </div> 
    </body>
</html>