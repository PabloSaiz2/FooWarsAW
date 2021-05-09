<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
    $tituloEdicion = $_GET['title'];

 ?>
 <!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand()); ?>">
    <title>Baguettes Of Iron - Wiki</title>
  </head>
  <body >
    <?php
          include_once('includes/reutilizables/header.php');
    ?>
      <div>
          <a href="wikiEditor.php?title=<?php echo($tituloEdicion)?>" >Editar</a>
      </div>
      <aside class="wiki" id ="wiki-aside">
          <h3>La Wiki de Baguettes of Iron</h3>
          <img src="img/logo_baguettes_of_iron.jpg" alt="Logo de la página">
          <section>
            <h3>Normas y links relevantes</h3>
            <a href="#">Normas de estilo</a>
            <a href="#">Página principal</a>
            <h3>Herramientas</h3>
            <a href="#">Cambios relacionados</a>
            <a href="#">Páginas especiales</a>
            <h3>Baguettes of Iron Links</h3>
            <a href="#">Mods</a>
          </section>
      </aside>
      <?php
          use es\fdi\ucm\aw\Articulo;
          $articulo = Articulo::buscarArticulo($_GET['title']);

      ?>
      <section class="wiki" id="wiki-main">
          <h2><?php 
          if($articulo)
            echo($articulo->getName());
          ?></h2>
           <img src="img/logo_baguettes_of_iron.jpg" alt="">
           <?php
              if($articulo){
                foreach ($articulo->getBloques() as $bloque) {
                  echo("<p>$bloque</p>");
                }
              }
           ?>
      </section>
      </body>
</html>