<?php
ob_start();
    if(isset($_POST["agregar"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $nombrec=$_POST['nombreC'];
        $inicio=$_POST['inicio'];
        $contenido=$_POST['contenido'];
        $imagen=$_POST['imagenC'];
        $color=$_POST['color'];

        $consulta = "INSERT INTO curso (nombreC, imagenC, contenido, color, inicio) VALUES ('$nombreC', '$imagenC', '$contenido', '$color', '$inicio')";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se agregó correctamente correctamente";
        else
            echo "Fallo!!";
        header("Refresh:2; http://sapienssocialiscursos.com/cambioCursos.php");
        
    }  
    if(isset($_POST["agregarP"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $nombreP=$_POST['nombreP'];
        $apellidoP=$_POST['ApellidoP'];
        $fotoP=$_POST['fotoP'];
        $ci=$_POST['ci'];
        $curriculum=$_POST['curriculum'];
        $materia=$_POST['materia'];

        $consulta = "INSERT INTO personal (nombreP, apellidoP, fotoP, ci, curriculum, materia) VALUES ('$nombreP', '$apellidoP', '$fotoP', '$ci', '$curriculum', '$materia')";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioPersonal.php");
    }
    if(isset($_POST["agregarA"])){
        require '../conexion.php';
        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        
        $titulo=$_POST['titulo'];
        $contenido=$_POST['contenido'];
        $foto=$_POST['foto'];

        $consulta = "INSERT INTO actividad (fotoA, descripcion, encabezado) VALUES ('$foto', '$contenido', '$titulo')";
        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
        if($resultado)
            echo "Se actualizó correctamente correctamente";
        else
            echo "Fallo!!";

        header("Refresh:2; http://sapienssocialiscursos.com/cambioActividades.php");
    }
ob_end_flush();
?>