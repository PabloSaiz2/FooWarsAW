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
        <form action="processMap.php" method="post">
          <input type="text" name="mapName">
          <input id = "string-map"type="hidden" name="stringMap">
          <button type="submit">Guardar en el perfil</button>
        </form>
            <a id = "download"download="Mapa.png">
                <button onClick="downloadCanvas()">Descargar</button>
            </a>
            <div>
                <input type="color" id ="color" value="#6a6a6a">
                <label for="color">Selecciona color</label>
            </div>
            <canvas id = "mapEditor" width=1500 height=1865></canvas>
           
      </section>
  </body>
</html>
