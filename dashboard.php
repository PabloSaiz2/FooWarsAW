<?php
   $tituloPagina = 'Baguettes of Iron - Dashboard';
   $contenido=<<<EOF
      <section>
            <a href="map.php">Crear mapa</a>
      </section>
    EOF;
    require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
    require_once('includes/logincheck.php');