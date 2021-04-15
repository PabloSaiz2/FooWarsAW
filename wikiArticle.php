<?php
    require_once('bootup.php');
    require_once('validation.php');
    //require_once('logincheck.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
    <title>Baguettes of Iron - Wiki</title>
  </head>
  <body>
      <?php
        include_once('header.php');
      ?>
      <div>
          <a href="wikiEditor.php?title=industria">Editar</a>
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
      <section class="wiki" id="wiki-main">
          <h2>Industria</h2>
           <img src="img/logo_baguettes_of_iron.jpg" alt="">
           <p>
           Lorem ipsum dolor sit amet, consectetur adipiscing elit,
          sed eiusmod tempor incidunt ut
          labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco
          laboris nisi ut aliquid ex ea commodi consequat. Quis aute iure reprehenderit in voluptate
          velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint obcaecat cupiditat non proident,
          sunt in culpa qui officia deserunt mollit anim id est laborum.
           </p>
      </section>
  </body>
</html>
