<?php
    require_once __DIR__.'/../bootup.php';
    require_once __DIR__.'/../validation.php';
    
    
      if(isset($_GET['pag'])){
        $pagina = $_GET['pag'];
      }
      else $pagina = '1';
     
     
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand());?>">
    <link rel="stylesheet" type = "text/css" href="css/color.css?v=<?php echo(rand());?>">
    <script src="https://kit.fontawesome.com/0afaf0fad2.js" crossorigin="anonymous"></script>
    
    
    <title><?= $tituloPagina ?></title>
    <body>
      <?php
         require_once __DIR__.'/../comun/header.php';
       ?>
      <?= $contenido ?>
      
    </body>
</html>