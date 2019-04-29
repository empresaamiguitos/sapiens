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
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" integrity="sha384-50oBUHEmvpQ+1lW4y57PTFmhCaXp0ML5d60M1M7uH2+nqUivzIebhndOJK28anvf" crossorigin="anonymous">
    <title>Docentes</title>
</head>
<body>

    <div class="container-fluid" id="docentes">
        <div class="row">
            <div class="col-12">
                <div class="jumbotron">
                    <h1 class="display-4">Personal</h1>
                    <p class="lead">En esta parte podrás conocer a nuestros docentes y administrativos.</p>
                    <hr class="my-4">
                    <p>Podrás conocerlos a mayor detalle teniendo su curriculum como principal carta de presentación.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid" id="personal">
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
                            <h5 class="card-title"><?php echo $dato['nombreP']?> <?php echo $dato['apellidoP']?></h5>
                            <p class="card-text">
                                <?php echo $dato['materia']?>
                            </p>
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#P<?php echo $dato['idPersona']?>">
                            Ver curriculum
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="P<?php echo $dato['idPersona']?>" tabindex="-1" role="dialog" aria-labelledby="<?php echo $dato['ci']?>" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="<?php echo $dato['ci']?>"><?php echo $dato['apellidoP']?> <?php echo $dato['nombreP']?> </h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <embed src="<?php echo $dato['curriculum']?>" width="100%" height="600px"/>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
                }
                mysqli_close( $conexion );
            ?>

        </div>
    </div>





    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
        
    
</body>
</html>