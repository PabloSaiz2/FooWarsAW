<?php
    require_once __DIR__.'/../bootup.php';
    require_once __DIR__.'/../validation.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand());?>">
    <link rel="stylesheet" type = "text/css" href="css/color.css?v=<?php echo(rand());?>">
    
    
    <title><?= $tituloPagina ?></title>
    <body>
      <?php
         require_once __DIR__.'/../comun/header.php';
       ?>
      <?= $contenido ?>
    </body>
</html>