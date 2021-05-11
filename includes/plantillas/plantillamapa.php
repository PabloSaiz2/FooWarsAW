<?php
     require_once __DIR__.'/../bootup.php';
     require_once __DIR__.'/../validation.php';
     require_once __DIR__.'/../logincheck.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
    <title><?= $tituloPagina ?></title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script type = "text/javascript" src="js/map.js"></script>
  </head>
  <body>
      <?php
         require_once __DIR__.'\..\comun\header.php';
      ?>
    <?= $contenido ?> 
  </body>
</html>
