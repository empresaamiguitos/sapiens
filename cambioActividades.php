<?php
    require('conexion.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css"
        integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Cambio de Actividades</title>
</head>
<body>

    <h1 class="text-center">Añadir Actividades</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./components/agregarCurso.php" method="POST">
                    <div class="form-group">
                        <label for="foto">Ingrese el encabezado de la actividad:</label>
                        <input type="text" class="form-control-file" id="titulo" name="titulo">
                    </div>
                    <div class="form-group">
                        <label for="contenido">Descripción de la actividad:</label>
                        <input type="text" class="form-control" name="contenido" id="contenido"
                            placeholder="Introduzca el contenido del curso">
                    </div>
                    <div class="form-group">
                        <label for="foto">Ingrese la dirección de la foto:</label>
                        <input type="text" class="form-control-file" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary" name="agregarA">Crear actividad nueva</button>
                </form>
            </div>
        </div>
    </div>


    <h1 class="text-center">Eliminar actividades</h1>

    <div class="container">

        <?php
            $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                        
            $consulta = "SELECT * FROM actividad";
            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            while ($dato = mysqli_fetch_array( $resultado ))
            {
        ?>
            <div class="row">
                <div class="col-md-7" style="text-align:center;">
                    <img src="<?php echo $dato['fotoA']?>" style="height: 400px; margin-top:20px;">
                </div>
                <div class="col-md-3">
                    <form action="./components/actualizarCurso.php" method="POST">
                        <div class="form-group">
                            <label for="foto">Ingrese el encabezado de la actividad:</label>
                            <input type="text" class="form-control-file" id="titulo" name="titulo" value="<?php echo $dato['encabezado']?>">
                        </div>
                        <div class="form-group">
                            <label for="contenido">Descripción de la actividad:</label>
                            <input type="text" class="form-control" name="contenido" id="contenido"
                                value="<?php echo $dato['descripcion']?>">
                        </div>
                        <div class="form-group">
                            <label for="foto">Ingrese la dirección de la foto:</label>
                            <input type="text" class="form-control-file" id="foto" name="foto" value="<?php echo $dato['fotoA']?>">
                        </div>
                        <input type="hidden" name="idActividad" id="idActividad" value="<?php echo $dato['idActividad']?>">
                        <button type="submit" class="btn btn-primary" name="modificarA">Crear actividad nueva</button>
                    </form>
                    
                </div>
                <div class="col-md-1">
                    <form action="components/eliminarCurso.php" method="POST">
                        <input type="hidden" name="idActividad" id="idActividad" value="<?php echo $dato['idActividad']?>">
                        <button type="submit" class="btn btn-danger" name="eliminarA">Eliminar</button>
                    </form>
                </div>
            </div>
        <?php
            }
            mysqli_close( $conexion );
        ?>

        
   
   
    </div>
    
    
</body>
</html>