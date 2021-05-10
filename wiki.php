<?php
    $tituloPagina='Baguettes of Iron - Wiki';

    $contenido=<<<EOF
      <aside class="wiki" id ="wiki-aside">
          <h3 class = "text-header">La Wiki de Baguettes of Iron</h3>
          <section>
            <h3 class = "wiki-aside-header text-header">Normas y links relevantes</h3>
            <a class ="text" href="#">Normas de estilo</a>
            <a class ="text" href="#">Página principal</a>
            <h3 class = "wiki-aside-header text-header">Herramientas</h3>
            <a class ="text" href="#">Cambios relacionados</a>
            <a class ="text" href="#">Páginas especiales</a>
            <h3 class = "wiki-aside-header text-header">Baguettes of Iron Links</h3>
            <a class ="text" href="#">Mods</a>
          </section>
      </aside>
      <section class="wiki" id="wiki-main">
           <img src="img/secondary-logo.png" alt="">
           <p class ="text">
              <em>¡Bienvenido/a a la wiki de Baguettes of Iron!</em> En esta wiki encontrarás toda la información
              del juego Hearts of Iron 4, aportada por la comunidad de jugadores. Para colaborar en la wiki
              tan solo necesitas una cuenta de Baguettes of Iron.
           </p>
           <div class = "wiki-category">
               <h2 class ="text-header">Economía</h2>
               <a class = "text" href="wikiArticle.php?title=industria">Industria</a>
           </div>
           <div class = "wiki-category">
               <h2 class ="text-header">General</h2>
               <a class = "text"href="wikiArticle.php?title=combate">Combate</a>
           </div>
      </section>
    EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
