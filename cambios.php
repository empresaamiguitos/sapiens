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

    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="./components/validador.php" method="POST">
                    <div class="form-group">
                        <label for="user">Ingrese su usuario:</label>
                        <input type="text" class="form-control-file" id="user" name="user">
                    </div>
                    <div class="form-group">
                        <label for="pass">Ingrese su contraseña:</label>
                        <input type="password" class="form-control" name="pass" id="pass"
                            placeholder="Introduzca el contenido del curso">
                    </div>
                    <button type="submit" class="btn btn-primary" name="validar">Ingresar</button>
                </form>
            </div>
        </div>
    </div>

    
</body>
</html>