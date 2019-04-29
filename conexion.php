<?php	
    $usuario = "root";
    $contrasena = "";  // en mi caso tengo contraseña pero en casa caso introducidla aquí.
    $servidor = "localhost";
    $basededatos = "sapiens";

    $conexion = mysqli_connect( $servidor, $usuario, "" ) or die ("No se ha podido conectar al servidor de Base de datos");
    mysqli_query ($conexion,"SET NAMES 'utf8'");
?>