<?php
    require_once('bootup.php');
    require_once('validation.php');
    require_once('logincheck.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
    <title>Baguettes of Iron</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type = "text/javascript" src="js/map.js"></script>
  </head>
  <body>
      <?php
        include_once('header.php');
      ?>
      <section>
            <canvas id = "mapEditor" width=1200 height=1865></canvas>
            <a id = "download"download="Mapa.png">
            <button onClick="downloadCanvas()">Guardar</button>
            </a>
      </section>
  </body>
</html>