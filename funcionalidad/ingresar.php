<?php
    include_once '../Clases/conexion.php';

    $var_usuario=$_POST["usuario"];
    $var_contrasena=$_POST["contrasena"];

    $resultado=mysqli_query($connect,"SELECT * FROM usuario WHERE nombre='$var_usuario' AND contrasena='$var_contrasena'");
    $filas=mysqli_num_rows($resultado);
    if($filas>0)
    {
        session_start();

        $_SESSION['usuario']=$var_usuario;
        $_SESSION['contrasena']=$var_contrasena;
        $_SESSION['dato']=$var_tipo;

        header("location:../estructura/menu_principal.php");
    }
    else
    {
        echo "Usted no puede ingresar a la BD. Datos incorrectos o cuenta inexistente";
    }    
    
?>