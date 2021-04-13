<?php
    require_once('bootup.php');
    require_once('validation.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand()); ?>">
    <title>Baguettes of Iron</title>
  
    
  </head>
  <body class="app">
        <?php
          include_once('header.php');
        ?>

      <div class="inicio">
          <section class="juego">
            <div id="slides">
                <input checked type="radio" name="slider" id="slide1" class="set" />
                <input type="radio" name="slider" id="slide2" class="set" />
                <input type="radio" name="slider" id="slide3" class="set" />
                <input type="radio" name="slider" id="slide4" class="set" />  
                    
                <div class="mask">    
                  <div class="overflow">
                    <div class="slide">Div con informacion del juego falta titulo y descripción</div>
                    <div class="slide">2</div>
                    <div class="slide">3</div>
                    <div class="slide">4</div>
                    
                  </div>    
                </div>

                <div id="controls" onclick="">  
                  <label for="slide1"> 1</label>
                  <label for="slide2">2</label>
                  <label for="slide3">3</label>
                  <label for="slide4">4</label>    
                </div>
            </div>
          </section>

          <section class="novedades"></section>
          <section class="noticas"></section>
          <section class="game"></section>
      </div>
  </body>
</html>
