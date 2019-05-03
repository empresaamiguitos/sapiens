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
    <title>Cambio de Personal</title>
</head>
<body>

    <h1 class="text-center">Añadir Personal</h1>

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="/components/agregarCurso.php" method="POST">
                    <div class="form-group">
                        <label for="Contenido">Nombre:</label>
                        <input type="text" class="form-control" name="nombreP" id="nombreP"
                            placeholder="Ingrese el nombre">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Apellido:</label>
                        <input type="text" class="form-control" name="ApellidoP" id="ApellidoP"
                            placeholder="Ingrese el apellido">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Foto:</label>
                        <input type="text" class="form-control" name="fotoP" id="fotoP" placeholder="Ingrese dirección de la foto">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">C.I.:</label>
                        <input type="text" class="form-control" name="ci" id="ci"
                            placeholder="Ingrese el C.I.:">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Curriculim:</label>
                        <input type="text" class="form-control" name="curriculum" id="Curriculum"
                            placeholder="Igrese el curriculum">
                    </div>
                    <div class="form-group">
                        <label for="Contenido">Materia:</label>
                        <input type="text" class="form-control" name="materia" id="materia"
                            placeholder="Introduzca las materias que dicta">
                    </div>
                    <button type="submit" class="btn btn-primary" name="agregarP">Agregar nueva persona</button>
                </form>
            </div>
        </div>
    </div>


    <h1 class="text-center">Eliminar Personas</h1>

    <div class="container">


        <div class="row">
            <?php
                $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );

                $consulta = "SELECT * FROM personal";
                $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");
	
                while ($dato = mysqli_fetch_array( $resultado ))
                {
                ?>
                <div class="col-md-4">
                    <div class="card">
                        <img src="<?php echo $dato['fotoP']?>" height="250px"/>
                        <div class="card-body">
                            <form action="/components/actualizarCurso.php" method="POST">
                                <div class="form-group">
                                    <label for="Contenido">Nombre:</label>
                                    <input type="text" class="form-control" name="nombreP" id="nombreP"
                                        value="<?php echo $dato['nombreP']?>">
                                </div>
                                <div class="form-group">
                                    <label for="Contenido">Apellido:</label>
                                    <input type="text" class="form-control" name="apellidoP" id="apellidoP"
                                        value="<?php echo $dato['apellidoP']?>">
                                </div>
                                <div class="form-group">
                                    <label for="Contenido">Foto:</label>
                                    <input type="text" class="form-control" name="fotoP" id="fotoP" value="<?php echo $dato['fotoP']?>">
                                </div>
                                <div class="form-group">
                                    <label for="Contenido">C.I.:</label>
                                    <input type="text" class="form-control" name="ci" id="ci"
                                        value="<?php echo $dato['ci']?>">
                                </div>
                                <div class="form-group">
                                    <label for="Contenido">Curriculum:</label>
                                    <input type="text" class="form-control" name="curriculum" id="curriculum"
                                        value="<?php echo $dato['curriculum']?>">
                                </div>
                                <div class="form-group">
                                    <label for="Contenido">Materias:</label>
                                    <input type="text" class="form-control" name="materia" id="materia"
                                        value="<?php echo $dato['materia']?>">
                                </div>
                                <input type="hidden" name="idPersona" value="<?php echo $dato['idPersona']?>">
                                <button type="submit" class="btn btn-primary" name="cambiarP">Modificar persona</button>
                            </form>
                            <form action="./components/eliminarCurso.php" method="POST">
                                <input type="hidden" name="idPersona" value="<?php echo $dato['idPersona']?>">
                                <button type="submit" class="btn btn-danger" name="eliminarP">Eliminar Persona</button>
                            </form>
                        </div>
                    </div>
                </div>
                <?php
                }
                mysqli_close( $conexion );
            ?>
        </div>
   
   
    </div>
    
    
</body>
</html>