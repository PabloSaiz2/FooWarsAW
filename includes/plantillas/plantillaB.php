<?php
    require_once('bootup.php');
    require_once('validation.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand()); ?>">
    <title><?= $tituloPagina ?></title>
  </head>
  <body >
    <?php
          require_once __DIR__.'\..\comun\header.php';
    ?>
    <?= $contenido ?>
  </body>
</html>
