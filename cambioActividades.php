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
    <title>Cambio de Actividades</title>
</head>
<body>

    <h1 class="text-center">Añadir Actividades</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="form-group">
                        <label for="Contenido">Descripción de la actividad:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido"
                            placeholder="Introduzca el contenido del curso">
                    </div>
                    <div class="form-group">
                        <label for="foto">Ingrese texto la foto de la actividad:</label>
                        <input type="file" class="form-control-file" id="foto" name="foto">
                    </div>
                    <button type="submit" class="btn btn-primary">Crear actividad nueva</button>
                </form>
            </div>
        </div>
    </div>


    <h1 class="text-center">Eliminar actividades</h1>

    <div class="container">


        <div class="row">
            <div class="col-md-7">
                <img src="dirección de la imagen">
            </div>
            <div class="col-md-3">
                <p>
                    <!-- Texto de la descripción -->
                </p>
            </div>
            <div class="col-md-1">
                <form action="eliminarAcción">
                    <input type="hidden" name="idActividad" id="idActividad">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
            </div>
        </div>
   
   
    </div>
    
    
</body>
</html>