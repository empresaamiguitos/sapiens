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
    <title>Cambio de cursos</title>
</head>
<body>

    <h1 class="text-center">Añadir curso</h1>

    <div class="container">
        <div class="row">
            <div class="col-12" style="text-align:center;">
                <form action="./components/agregarCurso.php" method="POST">
                    <div class="form-group"> 
                        <label for="nombreC">Nombre:</label>
                        <input type="text" class="form-control" name="nombreC" id="nombreC">
                    </div>
                    <div class="form-group">
                        <label for="inicio">Inicio de clases:</label>
                        <input type="text" class="form-control" name="inicio" id="inicio">
                    </div>
                    <div class="form-group">
                        <label for="contenido">Contenido:</label>
                        <input type="text" class="form-control" name="contenido" id="contenido">
                    </div>
                    <div class="form-group">
                        <label for="imagenC">Imagen:</label>
                        <input type="text" class="form-control" name="imagenC" id="imagenC">
                    </div>
                    <div class="form-group">
                        <label for="color">Color:</label>
                        <input type="text" class="form-control" name="color" id="color">
                    </div>

                    <button type="submit" class="btn btn-primary" name="agregar">
                        Crear nuevo curso
                    </button>
                </form>
            </div>
        </div>
    </div>


    <h1 class="text-center">Modificar o eliminar cursos</h1>

    <div class="container">
        <div class="row">
            <?php
                $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                
                $consulta = "SELECT * FROM curso";
                $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
                while ($dato = mysqli_fetch_array( $resultado ))
                {
                ?>
                    <div class="col-md-3">
                        <div class="card" id="curso<?php echo $dato['idCurso']?>">
                            <img src="<?php echo $dato['imagenC']?>" class="<?php echo $dato['color']?> img-fluid">
                            <div class="card-body" style="text-align:center;">
                                <form action="./components/actualizarCurso.php" method="POST">
                                    <div class="form-group"> 
                                        <label for="nombreC">Nombre:</label>
                                        <input type="text" class="form-control" name="nombreC" id="nombreC" value=" <?php echo $dato['nombreC']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="inicio">Inicio de clases:</label>
                                        <input type="text" class="form-control" name="inicio" id="inicio" value="<?php echo $dato['inicio']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="contenido">Contenido:</label>
                                        <input type="text" class="form-control" name="contenido" id="contenido" value="<?php echo $dato['contenido']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="imagenC">Imagen:</label>
                                        <input type="text" class="form-control" name="imagenC" id="imagenC" value="<?php echo $dato['imagenC']?>">
                                    </div>
                                    <div class="form-group">
                                        <label for="imagenC">Color:</label>
                                        <input type="text" class="form-control" name="color" id="color" value="<?php echo $dato['color']?>">
                                    </div>

                                    <input type="hidden" name="idCurso" id="idCurso" value="<?php echo $dato['idCurso']?>">
                                    <button type="submit" class="btn btn-primary" name="actualizar">
                                    Actualizar
                                    </button>
                                </form>
                                <form action="./components/eliminarCurso.php" method="POST">
                                    <input type="hidden" name="idCurso" id="idCurso" value="<?php echo $dato['idCurso']?>">
                                    <button type="submit" class="btn btn-danger" name="eliminar">
                                        Eliminar
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
        </div>
    </div>
    
    
</body>
</html>