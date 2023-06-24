<?php
    $TituloPubli=(isset($_POST["TituloPubli"]) && $_POST["TituloPubli"] !="")? $_POST["TituloPubli"] : false;
    $Descripcion=(isset($_POST["Descripcion"]) && $_POST["Descripcion"] !="")? $_POST["Descripcion"] : false;
    $FotoProducto=(isset($_POST["FotoProducto"]) && $_POST["FotoProducto"] !="")? $_POST["FotoProducto"] : false;
    $TipoProduc=(isset($_POST["TipoProduc"]) && $_POST["TipoProduc"] !="")? $_POST["TipoProduc"] : false;
    $Descripcion=(isset($_POST["Descripcion"]) && $_POST["Descripcion"] !="")? $_POST["Descripcion"] : false;

    echo "<!DOCTYPE html>
    <html lang='en'>
      <head>
        <meta charset='UTF-8'/>
        <meta name='viewport' content='width=device-width, initial-scale=1.0' />
        <title>Mapa</title>
        <link rel='stylesheet' href=''../templates\mapa.html'>
      </head>
      <body>
    $TituloPubli <br>
    $Descripcion <br>
    $FotoProducto <br>
    $TipoProduc <br>
    $Descripcion <br>
    <script src='../dynamics/js/enpm.js'></script>
      </body>
    </html>";
 ?>
 