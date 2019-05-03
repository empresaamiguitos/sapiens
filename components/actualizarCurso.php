<?php
ob_start();
    if(isset($_POST["actualizar"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $idCurso=$_POST['idCurso'];
        $nombreC=$_POST['nombreC'];
        $inicio=$_POST['inicio'];
        $contenido=$_POST['contenido'];
        $imagenC=$_POST['imagenC'];
        $color=$_POST['color'];

        $consulta = "UPDATE curso SET nombreC='$nombreC', imagenC='$imagenC', contenido='$contenido', color='$color', inicio='$inicio' WHERE idCurso LIKE '$idCurso'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioCursos.php");
    }

    if(isset($_POST["cambiarP"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $idPersona=$_POST['idPersona'];
        $nombreP=$_POST['nombreP'];
        $apellidoP=$_POST['apellidoP'];
        $fotoP=$_POST['fotoP'];
        $ci=$_POST['ci'];
        $curriculum=$_POST['curriculum'];
        $materia=$_POST['materia'];

        $consulta = "UPDATE personal SET nombreP='$nombreP', fotoP='$fotoP', ci='$ci', curriculum='$curriculum', materia='$materia', apellidoP='$apellidoP' WHERE idPersona LIKE '$idPersona'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioPersonal.php");
    }
    if(isset($_POST["modificarA"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $idActividad=$_POST['idActividad'];
        $titulo=$_POST['titulo'];
        $contenido=$_POST['contenido'];
        $foto=$_POST['foto'];

        $consulta = "UPDATE actividad SET fotoA='$foto', descripcion='$contenido', encabezado='$titulo' WHERE idActividad LIKE '$idActividad'";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";
        
        header("Refresh:2; http://sapienssocialiscursos.com/cambioActividades.php");
    }
    if(isset($_POST["modificarD"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $header=$_POST['header'];
        $rapido=$_POST['rapido'];
        $aumenta=$_POST['aumenta'];
        $facil=$_POST['facil'];
        $nosotros=$_POST['nosotros'];
        $direccion=$_POST['direccion'];
        $usuario=$_POST['usuario'];
        $contrasena=$_POST['contrasena'];

        $consulta = "UPDATE datos SET header='$header', rapido='$rapido', aumenta='$aumenta', facil='$facil', nosotros='$nosotros', direccion='$direccion', usuario='$usuario', contrasena='$contrasena' WHERE idActividad LIKE 1";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioDatos.php");
    }
ob_end_flush();
?>