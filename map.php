<?php
  $tituloPagina='Baguettes of Iron - Mapa';

  $contenido=<<<EOF
      <section>
        <form action="procesos/processMap.php" method="post">
          <input type="text" name="mapName">
          <input id = "string-map"type="hidden" name="stringMap">
          <button type="submit">Guardar en el perfil</button>
        </form>
            <a id = "download"download="Mapa.png">
                <button onClick="downloadCanvas()">Descargar</button>
            </a>
            <div>
                <input type="color" id ="color" value="#6a6a6a">
                <label for="color">Selecciona color</label>
            </div>
            <canvas id = "mapEditor" width=1500 height=1865></canvas>
           
      </section>
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillamapa.php'; 

