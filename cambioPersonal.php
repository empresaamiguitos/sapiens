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
    <title>Cambio de Personal</title>
</head>
<body>

    <h1 class="text-center">Añadir Personal</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="">
                    <div class="form-group">
                        <label for="Contenido">Nombre:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido"
                            placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Apellido:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido"
                            placeholder="Ingrese el apellido">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">C.I.:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido"
                            placeholder="Ingrese el C.I.:">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Curriculim:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido"
                            placeholder="Igrese el curriculum">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Materia:</label>
                        <input type="text" class="form-control" name="Contenido" id="Contenido"
                            placeholder="Introduzca las materias que dicta">
                    </div>
                    <button type="submit" class="btn btn-primary">Agregar nueva persona</button>
                </form>
            </div>
        </div>
    </div>


    <h1 class="text-center">Eliminar Personas</h1>

    <div class="container">


        <div class="row">
            <div class="col-md-5">
                <div class="card" style="width: 18rem;">
                    <div class="card-body">
                        <h5 class="card-title">"Nombre del docente"</h5>
                        <h6 class="card-subtitle mb-2 text-muted">"Apellidos"</h6>
                        <p class="card-text">"C.I. del docente"</p>
                        <form action="eliminarPersona.php">
                            <input type="hidden" name="idPersona" id="idPersona" value="aquiVieneElIdPersona">
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>
                    </div>
                    </div>
            </div>
        </div>
   
   
    </div>
    
    
</body>
</html>