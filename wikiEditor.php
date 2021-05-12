<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
    require_once('includes/logincheck.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
    <title>Baguettes of Iron - Wiki</title>
    <script type = "text/javascript" src="js/wiki.js"></script>
  </head>
  <body>
      <?php
        include_once('includes/reutilizables/header.php');
      ?>
      <section class="wiki" id="wiki-main">
           <form id = "fields" action="procesos/processArticle.php?title=<?php echo($_GET['title'])?>" enctype = "multipart/form-data" method="post">
                <button type="submit">Guardar</button>
                <?php
                    use es\fdi\ucm\aw\Articulo;
                    $articulo = Articulo::buscarArticulo($_GET['title']);
                    if($articulo){
                      $i=0;
                      foreach ($articulo->getBloques() as $bloque) {
                        echo("<textarea type = 'text' class = 'wiki-block' name='field$i'>$bloque</textarea>");
                        ++$i;
                      }
                    }
        
                ?>
           </form>
           <button onClick="addField()">Añadir bloque</button>
           <button onClick="addImageField()">Añadir imagen</button>
      </section>
  </body>
</html>
