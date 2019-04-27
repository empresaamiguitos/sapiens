<?php
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cambio de cursos</title>
</head>
<body>

    <div class="row">
        <div class="col-md-3">
            <!-- COMENTARIO, BORRAR ESTA LINEA -->
            <!-- En la parte de abajo tienes que escoger a que archivo enviar el formulario para modificaciones -->
            <form action="cambioCursos.php">
                <div class="card">
                    <img src="https://www.mistica.es/images/img/estructura/aula-magna-asientos.jpg" class="card-img-top color1">
                    <div class="card-body">
                        <h5 class="card-title"><input type="text" name="nombre" id="nombre" value="<?php echo="MOSTRAR NOMBRE DEL CURSO"?>"></h5>
                        <input type="text" name="contenido" id="contenido">
                        <button type="submit">Cambiar curso</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    
    
</body>
</html>