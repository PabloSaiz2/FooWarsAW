<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');    
 ?>
 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand()); ?>">
    <title>Error</title>
  </head>
       <body>
        <h1>Ha ocurrido un error procesando su solicitud. Vuelva a intentarlo.</h1>
        <a href="index.php">Volver al inicio</a>
      
      </body>
</html>