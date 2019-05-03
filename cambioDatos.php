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
                <form action="./components/actualizarCurso.php" method="POST">
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


    <h1 class="text-center">Modificar datos generales de la pagina</h1>

    <div class="container">

        <?php
            $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                        
            $consulta = "SELECT * FROM datos";
            $consulta = "SELECT * FROM datos";
            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
            $dato = mysqli_fetch_array($resultado);
        ?>
            <div class="row">
                
                <div class="col-12">
                    <form action="./components/actualizarCurso.php" method="POST">
                        <div class="form-group">
                            <label for="foto">Datos de bienvenida (parte principal):</label>
                            <input type="text" class="form-control-file" id="header" name="header" value="<?php echo $dato['header']?>">
                        </div>
                        <div class="form-group">
                            <label for="rapido">Datos de cursos rápidos:</label>
                            <input type="text" class="form-control" name="rapido" id="rapido"
                                value="<?php echo $dato['rapido']?>">
                        </div>
                        <div class="form-group">
                            <label for="aumenta">Datos de aumenta tus conocimientos:</label>
                            <input type="text" class="form-control-file" id="aumenta" name="aumenta" value="<?php echo $dato['aumenta']?>">
                        </div>
                        <div class="form-group">
                            <label for="facil">Datos de aprende fácil:</label>
                            <input type="text" class="form-control-file" id="facil" name="facil" value="<?php echo $dato['facil']?>">
                        </div>
                        <div class="form-group">
                            <label for="nosotros">Datos de nosotros (Final de la página):</label>
                            <input type="text" class="form-control-file" id="nosotros" name="nosotros" value="<?php echo $dato['nosotros']?>">
                        </div>
                        <div class="form-group">
                            <label for="direccion">Datos de direccion (final de página):</label>
                            <input type="text" class="form-control-file" id="direccion" name="direccion" value="<?php echo $dato['direccion']?>">
                        </div>
                        <div class="form-group">
                            <label for="usuario">Nombre de usuario:</label>
                            <input type="text" class="form-control-file" id="usuario" name="usuario" value="<?php echo $dato['usuario']?>">
                        </div>
                        <div class="form-group">
                            <label for="contrasena">Contraseña:</label>
                            <input type="text" class="form-control-file" id="contrasena" name="contrasena" value="<?php echo $dato['contrasena']?>">
                        </div>
                        <button type="submit" class="btn btn-primary" name="modificarD">Cambiar datos</button>
                    </form>
                    
                </div>
            </div>
        <?php
            
            mysqli_close( $conexion );
        ?>

        
   
   
    </div>
    
    
</body>
</html>