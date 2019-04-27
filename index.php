
<?php
//  Las instrucciones estan en la linea 114

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Sapiens</title>
</head>
<body>

    <nav class="navbar fixed-top navbar-expand-lg navbar-light" id="menu">
        <a class="navbar-brand" href="index.php">
            <img src="./img/infinitover.png" >
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cursos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
                        <a class="dropdown-item" href="#">Curso</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">DERECHO</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">ELABORACIÓN DE TESIS</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Personal</a>
                </li>
            </ul>
            <ul class="navbar-nav pull-xs-right">
                <li class="nav-item">
                    <a class="nav-link " href="#">Direcciones</a>
                </li>
            </ul>
            
        </div>
    </nav>

    <div class="jumbotron" id="header">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">SAPIENS</h3>
                <p class="card-text">
                    <p>
                        Bienvenidos a la universidad del conocimiento.
                    </p>
                    <p>
                        Curos de preparación y desarrollo profesional, conoce los cursos que brindamos.
                    </p>
                    <p>
                        Aprende, Mejora Conocimientos y Actualízate.
                    </p>
                </p>
            </div>
        </div>
        <div class="formulario">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nombre</label>
                    <input type="text" class="form-control" id="nombre" aria-describedby="emailHelp"
                        placeholder="Nombre Completo" name="nombre">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Correo electrónico</label>
                    <input type="email" class="form-control" id="correo" name="correo" aria-describedby="emailHelp"
                        placeholder="Ejemplo@ejemplo.com">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Mensaje</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="4" placeholder="Ingrese el mesaje o consulta que tenga para nosotros"></textarea>
                </div>
                <button type="submit" class="btn">Enviar</button>
            </form>
        </div>
        <div class="verAbajo">
            <h3>Sigue viendo</h3>
            <h3><i class="fas fa-angle-double-down"></i></h3>
        </div>
    </div>

    <div class="container" id="contenido">
        <div class="row">
            <div class="col-12 text-center">
                <h1>Cursos Disponibles</h1>
                <p>Conviertete en un experto en el área que prefieras.</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">




<!-- Desde aca va dentro del while -->
<!-- Las modificaciones van donde hay comentarios...
dice donde tienes que hacer modificaciones y que necesitamos mostrar -->
<!-- Las modificaciones son en las lineas: 120, 124, 127, 133, 138, 146. -->
                <div class="card">
                    <img src="
                    <!-- En esta sección va la imagen -->
                    ">
                    <div class="card-body">
                        <h5 class="card-title">
                            <!-- En esta parte mostrar el nombre del curso -->
                        </h5>
                        <!-- En la parte de abajo se modifica los cursos -->
                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#<!-- En esta sección va el ID del curso -->">
                        Conoce más
                        </button>

                        <!-- Modal -->
                        <!-- En la parte de abajo se modifica los cursos -->
                        <div class="modal fade bd-example-modal-lg" id="<!-- En esta sección va el ID del curso -->" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-lg" role="document">
                            <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">
                                    <!-- Nombre del curso mostrado con php "echo array[0]", algo asi -->
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <embed src="
                                <!-- En esta linea mostramos lo que se guarda en el contenido del curso -->
                                " type="application/pdf" width="100%" height="600px" />
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
<!-- Htasta aqui va el while -->




            </div>
        </div>
    </div>

    <div class="container" id="porque">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">¿Por que Sapiens?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="container-fluid contenedor">
                    <div class="row">
                        <div class="col-4">
                            <div class="icono">
                                <i class="icono far fa-clock"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <p>Cursos rápidos, directo a lo que necesitas</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container-fluid contenedor">
                    <div class="row">
                        <div class="col-4">
                            <div class="icono">
                                <i class="icono fas fa-chart-line"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <p>Mejora tus conocimientos e incrementa tus posibilidades de conseguir mejores puestos.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="container-fluid contenedor">
                    <div class="row">
                        <div class="col-4">
                            <div class="icono">
                                <i class="icono far fa-thumbs-up"></i>
                            </div>
                        </div>
                        <div class="col-8">
                            <p>Facilidad de aprendizaje, los docentes son especializados en esta área con metodologías de enseñanza aptas para todo publico</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-12">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                    </ol>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                        <img class="d-block w-100" src="https://images.pexels.com/photos/7102/notes-macbook-study-conference.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="First slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.pexels.com/photos/7102/notes-macbook-study-conference.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Second slide">
                        </div>
                        <div class="carousel-item">
                        <img class="d-block w-100" src="https://images.pexels.com/photos/7102/notes-macbook-study-conference.jpg?auto=compress&cs=tinysrgb&dpr=1&w=500" alt="Third slide">
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                    </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Nosotros</h2>
            </div>
            <div class="col-md-5">
                Somos una organización de distintas áreas con Bastánte experiencia en el mercado laboral. <br>
                Conoce a nuestros docentes especializados en el área y personas que hicieron toda esta institución posible. <br>
                <h3><a href="" class="btn btn-danger">Conoce mas de cerca a nuestros docentes</a></h3>
            </div>
            <div class="col-md-7">
                <a href="">
                    <i class="fab fa-whatsapp"></i> <br>
                    Envianos un mensaje por WhatsApp haciendo clicl aqui <br>
                </a>
                <a href="">
                    <i class="fab fa-facebook"></i> <br>
                    Conoce nuestra página de facebook y encuentra contenido de interes <br>
                </a>
                <a href="">
                    <i class="fab fa-facebook-messenger"></i> <br>
                    Envianos un mensaje por Messenger, atenderemos tus dudas, consultas y sugerencias que nos quieras dar. <br>
                </a>
                
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <h2 class="text-center">Como llegar</h2>
            </div>
            <div class="col-md-5">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.40901951025!2d-68.1372791708302!3d-16.493954999288746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDI5JzM4LjIiUyA2OMKwMDgnMTIuMiJX!5e0!3m2!1ses!2sbo!4v1556199659805!5m2!1ses!2sbo" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-md-5">
            </div>
        </div>
    </div>









        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script src="./js/main.js"></script>
        <script src="js/wow.min.js"></script>
        <script>
            new WOW().init();
        </script>
</body>
</html>