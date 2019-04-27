<?php
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
            <div class="col-12">
                <form action="">
                    <div class="form-group">
                        <label for="nombreCurso">Nombre del curso:</label>
                        <input type="text" class="form-control" name="nombreCurso" id="nombreCurso"
                            placeholder="Introduzca el nombre del curso">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Contenido del curso:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido"
                            placeholder="Introduzca el contenido del curso">
                    </div>
                    <div class="form-group">
                        <label for="foto">Ingrese texto la foto del curso:</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear nuevo curso</button>
                </form>
            </div>
        </div>
    </div>


    <h1 class="text-center">Modificar o eliminar cursos</h1>

    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <!-- COMENTARIO, BORRAR ESTA LINEA -->
                <!-- En la parte de abajo tienes que escoger a que archivo enviar el formulario para modificaciones -->
                <div class="form-group">
                    <div class="card">
                        <form action="cambioCursos.php">
                            <img src="echo de imagenDB" class="card-img-top color1">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <input type="text" class="form-control" name="nombre" id="nombre" value="">
                                </h5>
                                <input type="text" class="form-control" name="contenido" id="contenido">
                                <input type="hidden" name="idcurso" id="idcurso" value="echo mostrando el id">
                                <button type="submit" class="btn btn-primary">Cambiar curso</button>
                            </div>
                        </form>
                        <form action="eliminarCurso.php">
                            <button type="submit" class="btn btn-danger">Eliminar curso</button>
                            <input type="hidden" name="idcurso" id="idcurso" value="echo mostrando el id">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
</body>
</html>