<?php
    require('conexion.php');
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                        
    $consulta = "SELECT * FROM datos";
    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
    $datos = mysqli_fetch_array($resultado);
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

    <div id="contenedor">
        <div id="carga">
            <img src="./img/infinitover.png">
            <h3>CARGANDO</h3>
        </div>
    </div>

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
                    <a class="nav-link" href="/">Inicio</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Cursos
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">  
                        <?php
                            $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

                            $consulta = "SELECT * FROM curso";
                            $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                
                            while ($dato = mysqli_fetch_array( $resultado ))
                            {
                        ?>
                            <a class="dropdown-item" href="#curso<?php echo $dato['idCurso']?>"><?php echo $dato['nombreC']?></a>
                            <div class="dropdown-divider"></div>
                        <?php
                            }
                        ?>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="docentes.php">Personal</a>
                </li>
            </ul>
            <ul class="navbar-nav pull-xs-right">
                <li class="nav-item">
                    <a class="nav-link " href="#footer">Direcciones</a>
                </li>
            </ul>
            
        </div>
    </nav>

    <div class="jumbotron" id="header">
        <div class="card">
            <div class="card-body">
                <h3 class="card-title">SAPIENS</h3>
                <p class="card-text">
                    <br>
                    <?php echo $datos['header'];?>
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
    <div class="conainer-fluid" id="formPeque">
        <div class="row">
            <div class="col-12">
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
            </div>
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
                            <div class="card-body">
                                <h5 class="card-title">
                                    <?php echo $dato['nombreC']?>
                                </h5>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#Curso<?php echo $dato['idCurso']?>">
                                Conoce más
                                </button>

                                <!-- Modal -->
                                <div class="modal fade bd-example-modal-lg" id="Curso<?php echo $dato['idCurso']?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $dato['idCurso']?>" aria-hidden="true">
                                    <div class="modal-dialog modal-lg" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="<?php echo $dato['idCurso']?>">
                                                    <?php echo $dato['nombreC']?>
                                                </h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <embed src="<?php echo $dato['contenido']?>" width="100%" height="600px"/>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-footer text-muted">
                                    <?php echo $dato['inicio']?>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>

        </div>
    </div>

    <div class="container" id="porque">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">¿Por que Sapiens?</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 contenedor">
                <div class="icono">
                    <i class="icono far fa-clock"></i>
                    <h2 class="color1">Cursos rápidos</h2>
                    <p>
                        <?php echo $datos['rapido'];?>
                    </p><br>
                    <p>¡Tu tiempo es importante para nosotros!</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/39396/hourglass-time-hours-sand-39396.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid">
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/220453/pexels-photo-220453.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=650&w=940" class="img-fluid">
            </div>
            <div class="col-md-6 contenedor">
                <div class="icono">
                    <i class="icono fas fa-chart-line"></i>
                    <h2 class="color2">Aumenta tus conocimientos</h2>
                    <p><?php echo $datos['aumenta'];?></p><br>
                    <p> ¡Este es el lugar perfecto para ti!</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6 contenedor">
                <div class="icono">
                    <i class="icono far fa-thumbs-up"></i>
                    <h2 class="color3">Facilidad de apredizaje</h2>
                    <p><?php echo $datos['facil'];?></p><br>
                    <p>¡No esperes más!</p>
                </div>
            </div>
            <div class="col-md-6">
                <img src="https://images.pexels.com/photos/206585/pexels-photo-206585.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-fluid">
            </div>
        </div>
    </div>

    <div class="container" id="actividades">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center">
                    Conoce lo que hacemos
                </h1>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                    <?php
                        $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
                        
                        $consulta = "SELECT * FROM actividad";
                        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                        $estado=true;
                        while ($dato = mysqli_fetch_array( $resultado ))
                        {
                    ?>
                        <li data-target="#carouselExampleIndicators" data-slide-to="<?php echo $dato['idActividad']-1;?>" class="<?php if($estado){echo "active"; $estado=false;}?>"></li>
                    <?php
                        }
                    ?>
                    </ol>
                    <div class="carousel-inner">
                    <?php
                        $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
                        $estado=true;
                        while ($dato = mysqli_fetch_array( $resultado ))
                        {
                    ?>
                        <div class="carousel-item <?php if($dato['idActividad']==1){echo "active";$estado=false;}?>">
                            <img  src="<?php echo $dato['fotoA']?>">
                            <div class="carousel-caption d-md-block">
                                <h5><?php echo $dato['encabezado']?></h5>
                                <p><?php echo $dato['descripcion']?></p>
                            </div>
                        </div>
                    <?php
                        }
                        mysqli_close( $conexion );
                    ?>
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
            <div class="col-md-6" style="margin: auto; text-align: center; heigth: 350px; margin:0; padding:0;">
                <div class="fb-page" style="box-shadow: 0px 0px 8px #99a3a4 margin:0; padding:0;" data-href="https://www.facebook.com/Sapiens-381716665752030/" data-tabs="timeline" data-width="" data-height="350px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true">
                    <blockquote cite="https://www.facebook.com/Sapiens-381716665752030/" class="fb-xfbml-parse-ignore">
                        <a href="https://www.facebook.com/Sapiens-381716665752030/">
                            Sapiens
                        </a>
                    </blockquote>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid" id="footer">
        <div class="row" id="nosotros">
            <div class="col-12">
                <h2 class="text-center">Nosotros</h2>
            </div>
            <div class="col-md-5">
                <?php echo $datos['nosotros'];?>
                <h3>
                    <a href="" class="btn btn-danger">
                        Conoce de cerca a nuestros docentes
                    </a
                ></h3>
            </div>
            <div class="col-md-7">
                <a href="https://api.whatsapp.com/send?phone=0123456789" class="whatsapp" target="blank">
                    <i class="fab fa-whatsapp"></i> <br>
                    Envianos un mensaje por WhatsApp haciendo clicl aqui <br>
                </a>
                <a href="https://www.facebook.com/Sapiens-381716665752030/" class="facebook" target="blank">
                    <i class="fab fa-facebook"></i> <br>
                    Conoce nuestra página de facebook y encuentra contenido de interes <br>
                </a>
                <a href="https://m.me/381716665752030" class="messenger" target="blank">
                    <i class="fab fa-facebook-messenger"></i> <br>
                    Envianos un mensaje por Messenger, atenderemos tus dudas, consultas y sugerencias que nos quieras dar. <br>
                </a>
            </div>
        </div>
        <div class="row" id="llegar">
            <div class="col-12">
                <h2 class="text-center">Como llegar</h2>
            </div>
            <div class="col-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d956.40901951025!2d-68.1372791708302!3d-16.493954999288746!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTbCsDI5JzM4LjIiUyA2OMKwMDgnMTIuMiJX!5e0!3m2!1ses!2sbo!4v1556199659805!5m2!1ses!2sbo" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>
            <div class="col-12">
                <p>
                    <?php echo $datos['direccion'];?>
                   <!-- <span>Dirección:</span> Av. Montes 775, Edificio Colonial, segundo mezanine, Oficina 202. 
                    (estamos a pocos pasos de la pasarela Pérez Velasco) <br> <br>
                    <span>Contáctanos:</span> 72571093 – 71960432 <br> <br>
                    <span>LA PAZ - BOLIVIA</span> -->
                </p>
            </div>
        </div>
    </div>









        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v3.2&appId=112716205425245&autoLogAppEvents=1"></script>
        <script src="./js/main.js"></script>
</body>
</html>