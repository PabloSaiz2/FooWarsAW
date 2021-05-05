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
    <script type = "text/javascript" src="js/wiki.js"></script>
  </head>
  <body>
      <?php
        include_once('header.php');
      ?>
      <div>
          <a href="wikiEditor.php?title=industria">Editar</a>
      </div>
      <section class="wiki" id="wiki-main">
           <form id = "fields" action="#" method="post">
                <button type="submit">Guardar</button>
           </form>
           <button onClick="addField()">Añadir bloque</button>
      </section>
  </body>
</html>
