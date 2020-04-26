<?php 
    include_once '../Clases/sesion.php';
    include_once '../Clases/conexion.php';

    if($_POST['id_cliente_editar']){
        $num_cte=$_POST['id_cliente_editar'];
        $sql=mysqli_query($connect,"SELECT * FROM cliente where num_cte='$num_cte' LIMIT 1");
        $row=mysqli_fetch_assoc($sql);
    }
?>

<!DOCTYPE html>
<html lang="es">
    <head>
        <title>Clientes | Editar</title>
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
                    
                </li>
        </ul>
        </header>
        <div class="all">
            <div class="main">
                <form method="POST" action="../funcionalidad/edicion_clientes_guardar.php">
                    <h1>Editar cliente</h1>
                    <p>Edite los datos del cliente a continuación</p>
                    <input type="text" name="nombre" id="nombre" placeholder="Ingrese nombre" value="<?php echo $row["Nom_cte"]; ?>">
                    <input type="text" name="apellido_paterno" id="apellido_paterno" placeholder="Apellido paterno" value="<?php echo $row["App_cte"]; ?>">
                    <input type="text" name="apellido_materno" id="apellido_materno" placeholder="Apellido materno" value="<?php echo $row["Apm_cte"]; ?>">
                    <select name="estado"  id="estado">
                        <option hidden> <?php echo $row["Edo_cte"]; ?></option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Baja California">Baja California</option>
                        <option value="Baja California Sur">Baja California Sur</option>
                        <option value="Campeche">Campeche</option>
                        <option value="Chiapas">Chiapas</option>
                        <option value="Chihuahua">Chihuahua</option>
                        <option value="Ciudad de México">Ciudad de México</option>
                        <option value="Coahuila">Coahuila</option>
                        <option value="Colima">Colima</option>
                        <option value="Durango">Durango</option>
                        <option value="Guanajuato">Guanajuato</option>
                        <option value="Guerrero">Guerrero</option>
                        <option value="Hidalgo">Hidalgo</option>
                        <option value="Jalisco">Jalisco</option>
                        <option value="México">México</option>
                        <option value="Michoacán">Michoacán</option>
                        <option value="Morelos">Morelos</option>
                        <option value="Nayarit">Nayarit</option>
                        <option value="Nuevo León">Nuevo León</option>
                        <option value="Oaxaca">Oaxaca</option>
                        <option value="Puebla">Puebla</option>
                        <option value="Querétaro">Querétaro</option>
                        <option value="Quintana Roo">Quintana Roo</option>
                        <option value="San Luis Potosí">San Luis Potosí</option>
                        <option value="Sinaloa">Sinaloa</option>
                        <option value="Sonora">Sonora</option>
                        <option value="Tabasco">Tabasco</option>
                        <option value="Tamaulipas">Tamaulipas</option>
                        <option value="Tlaxcala">Tlaxcala</option>
                        <option value="Veracruz">Veracruz</option>
                        <option value="Yucatán">Yucatán</option>
                        <option value="Zacatecas">Zacatecas</option>
                    </select>
                    <select name="municipio" id="municipio">
                        <option hidden> <?php echo $row["Mun_cte"]; ?></option>
                        <option value="Aguascalientes">Aguascalientes</option>
                        <option value="Asientos">Asientos</option>
                        <option value="Calvillo">Calvillo</option>
                        <option value="Cosío">Cosío</option>
                        <option value="Jesús María">Jesús María</option>
                        <option value="Pabellón de Arteaga">Pabellón de Arteaga</option>
                        <option value="Rincón de Romos">Rincón de Romos</option>
                        <option value="San José de Gracia">San José de Gracia</option>
                        <option value="Tepezalá">Tepezalá</option>
                        <option value="El Llano">El Llano</option>
                        <option value="San Francisco de los Romo">San Francisco de los Romo</option>
                    </select>
                    <input type="text" name="colonia" id="colonia" placeholder="Colonia" value="<?php echo $row["Col_cte"]; ?>">
                    <input type="text" name="calle" id="calle" placeholder="Calle" value="<?php echo $row["Call_cte"]; ?>">
                    <input type="text" name="numero" id="numero" placeholder="Número" value="<?php echo $row["Num"]; ?>">
                    <input type="text" name="codigo_postal" id="codigo_postal" placeholder="Codigo Postal" value="<?php echo $row["Cp"]; ?>">
                    <input type="text" name="telefono" id="telefono" placeholder="Telefono" value="<?php echo $row["Tel"]; ?>">
                    <input type="submit" value="Guardar">
                    <input type="reset" value="Limpiar">
                    <input type="text" class="oculto" name="num_cte" value="<?php echo $row["Num_cte"]; ?>">
                </form>
            </div>
        </div> 
    </body>
</html>