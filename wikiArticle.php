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
          include_once('includes/comun/header.php');
    ?>
      <div>
      <?php
        if(isValidSession()){
      ?>
          <a id = "edit"href="wikiEditor.php?title=<?php echo($tituloEdicion)?>" >Editar &#9881</a>
      <?php 
        }
      ?>
      </div>
      <aside class="wiki" id ="wiki-aside">
          <h3>La Wiki de Baguettes of Iron</h3>
          <section>
            <h3 class = "wiki-aside-header text-header">Normas y links relevantes</h3>
            <a href="#">Normas de estilo</a>
            <a href="#">Página principal</a>
            <h3 class = "wiki-aside-header text-header">Herramientas</h3>
            <a href="#">Cambios relacionados</a>
            <a href="#">Páginas especiales</a>
            <h3 class = "wiki-aside-header text-header">Baguettes of Iron Links</h3>
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
                  $formatted = explode('.',$bloque);
                  if(count($formatted)==2&&$formatted[1]=="png"){
                    echo("<img src='uploads/images/".$bloque."' class ='wiki-img' alt = 'Imagen de la wiki'>");
                  }
                  else
                    echo("<p class='wiki-text'>$bloque</p>");
                }
              }
           ?>
      </section>
      </body>
</html>