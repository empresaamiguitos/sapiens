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
    <title>Cambios</title>
</head>
<body>

    <div class="jumbotron text-center">
        <h1 class="display-4">Bienvenido</h1>
        <p class="lead">Sección de modificaciones</p>
        <hr class="my-4">
        <p>En esta sección podrás hacer los cambios necesarios de la página para poder administrar los cursos, actividades, docenter, etc.</p>
        
    </div>


    <div class="container" id="contenido">
        <div class="row">
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://images.pexels.com/photos/159844/cellular-education-classroom-159844.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500"
                        alt="Cursos">
                    <div class="card-body text-center">
                        <h5 class="card-title">Modificación de cursos</h5>
                        <p class="card-text">En esta sección podrás adicionar, eliminar y modificar cursos que necesita.</p>
                        <a href="./cambioCursos.php" class="btn btn-primary">Cambiar cursos</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://images.pexels.com/photos/267885/pexels-photo-267885.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Cursos">
                    <div class="card-body text-center">
                        <h5 class="card-title">Actividades</h5>
                        <p class="card-text">En esta sección podrás adicionar, eliminar y modificar las fotos de las actividades que desea que se muestre en la página.</p>
                        <a href="./cambioActividades.php" class="btn btn-primary">Cambiar actividades</a>
                    </div>
                </div>
            </div>
            <div class="col-4">
                <div class="card" style="width: 18rem;">
                    <img class="card-img-top"
                        src="https://images.pexels.com/photos/1842610/pexels-photo-1842610.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="Cursos">
                    <div class="card-body text-center">
                        <h5 class="card-title">Modificación de perdonal</h5>
                        <p class="card-text">En esta sección podrás adicionar, eliminar y modificar el personal, desde los fundadores, hasta los docentes que tiene.</p>
                        <a href="./cambioPersonal.php" class="btn btn-primary">Cambiar docentes</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card" style="width: 18rem; margin:auto;">
                    <img class="card-img-top"
                        src="https://images.pexels.com/photos/1342460/pexels-photo-1342460.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940"
                        alt="datos">
                    <div class="card-body text-center">
                        <h5 class="card-title">Modificación de datos de la página</h5>
                        <p class="card-text">En esta sección podrás modificar los textos de ciertas áreas de la página web.</p>
                        <a href="./cambioDatos.php" class="btn btn-primary">Cambiar datos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    
</body>
</html>