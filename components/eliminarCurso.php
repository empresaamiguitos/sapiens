<?php
ob_start();
    if(isset($_POST["eliminar"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        $id=$_POST['idCurso'];
        $consulta = "DELETE FROM curso where idCurso LIKE '$id'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se eliminó correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioCursos.php");
    }  
    if(isset($_POST["eliminarP"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $idPersona=$_POST['idPersona'];

        $consulta = "DELETE FROM personal WHERE idPersona LIKE '$idPersona'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioPersonal.php");
    }
    if(isset($_POST["eliminarA"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $idActividad=$_POST['idActividad'];

        $consulta = "DELETE FROM actividad WHERE idActividad LIKE '$idActividad'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioActividades.php");
    }
ob_end_flush();
?>