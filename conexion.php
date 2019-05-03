<?php	
    $usuario = "fundacio_root";
    $contrasena = "sapiens";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "fundacio_sapienscursos";

    $conexion = mysqli_connect( $servidor, $usuario, $contrasena ) or die ("No se ha podido conectar al servidor de Base de datos");
    mysqli_query ($conexion,"SET NAMES 'utf8'");
?>