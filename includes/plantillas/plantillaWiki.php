<?php
     require_once __DIR__.'/../bootup.php';
     require_once __DIR__.'/../validation.php';
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand()); ?>">
    <script type = "text/javascript" src="js/wiki.js"></script>
    <title><?= $tituloPagina ?></title>
    
  </head>
  <body >
    <?php
          require_once __DIR__.'/../comun/header.php';
    ?>
    <?= $contenido ?>
  </body>
</html>
