
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
	<link rel="stylesheet" type = "text/css" href="css/estilo_tienda.css">
	<script type = "text/javascript" src="js/store/slider.js"></script>
    <title><?= $tituloPagina ?></title>
  </head>
  
  <body>
  <?php
          require_once __DIR__.'\..\comun\header.php';
    ?>
    <?= $contenido ?>
  </body>
</html>
