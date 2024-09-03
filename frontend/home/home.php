<?php
    include_once("../js/verificaSesion.php");
    verificaSesion();
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!--<link rel="stylesheet" type="text/css" media="screen" href="css/bpptstrap.min.css">-->
    </head>
    <body>
        <h1>Bienvenidos 
            <?php
                echo $_COOKIE["keyId"];
            ?> 
        </h1>
        <a href = "../js/logout.php">Cerrar Sesion </h2>
    </body>
</html>