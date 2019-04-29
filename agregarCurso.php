<?php
    if(isset( $_POST['nombreC'],$_POST['inicio'],$_POST['contenido'], $_POST['imagenC'],$_POST['color']) and
    ($_POST['nombreC']!="" and $_POST['inicio']!="" and $_POST['contenido']!="" and  $_POST['imagenC']!="" and $_POST['color']!="" ))
    {
        echo $_POST["nombreC"];
    }
?>