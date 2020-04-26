<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';
?>

<!doctype html>
<html>
<head>
    <title>Zapateria</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../estilos/estilos_menu_principal.css">
</head>
<body>
    <header>
        <div class="panel1">
            <img src="../imagenes/user.png" alt="">
        </div>
        <div class="panel2">
            <h1><?php echo $_SESSION['usuario']; ?></h1>
        </div>
        <div class="panel3">
            <img src="../imagenes/zapato.jpeg" alt="">
        </div>
        <div class="panel4"></div>
        <div class="panel5"></div>      
    </header>
    
    <div class="menu">
        <ul>
            <li class="lis_ex">
                
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
                <a href="">Cuentas</a>
                <ul>
                    <li><a href="cuenta_nueva.html">Crear cuenta</a></li>
                    <li><a href="../funcionalidad/cerrar_sesion.php">Cerrar Sesión</a></li>
                </ul>
            </li>
            <li class="lis_ex">
                
            </li>
        </ul>
    </div>	
</body>
</html>