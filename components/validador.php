<?php
ob_start();
if(isset($_POST["validar"])){
    require '../conexion.php';
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    
    $user=$_POST['user'];
    $pass=$_POST['pass'];

    $consulta = "SELECT * FROM datos WHERE idDato LIKE 1";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    $datos = mysqli_fetch_array($resultado);

    if($datos['usuario'] == $user and $datos['contrasena'] == $pass)
    {
        echo "<div style=\"text-align:center;\">";
        echo "<hi style=\"margin:auto;\">Contraseña y usuario CORRECTOS</h1>";
        echo "Espere un momento";
        echo"</div>";
        
        header("Location: http://sapienssocialiscursos.com/c.php");
        

    }else{
        
        echo "<div style=\"text-align:center;\">";
            echo "<hi style=\"margin:auto;\">Contraseña y usuario INCORRECTOS</h1>";
            echo "Espere un momento";
        echo"</div>";

        header("Refresh:2; http://sapienssocialiscursos.com/cambios.php");
    }
    ob_end_flush();
}
?>