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
  <body >
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
                    <div class="slide">
                      <h1> Baguettes of Iron Lanzamiento</h1>
                      <p>Baguettes of Iron Lanzamiento es un videojuego de estrategia en tiempo por turnos para computadoras personales,Una partida estándar se basa generalmente en derrotar a todas las unidades enemigas ya sean aldeanos o unidades de guerra utilizando diferentes tácticas y estrategias de guerra, pero también si captura todas las ruinas o artefactos y esperando 2000 años antes de que los imperios enemigos tomasen el control. Además, si se construye una maravilla, debe esperar 2000 años para ganar, pero el oponente debe destruirlo. Si se elige conquista, solo gana el jugador que elimina a todos los imperios oponenetes. Además, existen partidas en donde debe alcanzar el puntaje máximo o se usa un temporizador. Ten en cuenta de que cada 5 años de juego sería un segundo o dos en la vida real.</p>
                      </div>
                    <div class="slide">
                      <h1> ¿En que consiste?</h1>
                      <p>Las unidades son individuos o grupos que forman una unidad independiente y se pueden controlar directamente con la interfaz del ordenador. Se puede tener un número determinado de unidades iguales o distintas, pero ese número depende de la población máxima por facción o las limitaciones de la campaña si es el caso. Estas unidades se suelen separar en unidades militares y unidades civiles. Las primeras están enfocadas al combate, en cambio las segundas son para la recolección de recursos y construcción de edificaciones. Cada unidad posee un nivel de salud, que determina la cantidad de daño que pueden recibir antes de ser eliminadas. Puntos de ataque, que son los puntos de salud que quitan a los unidades enemigas por golpe. Los puntos de defensa, que es el valor de puntos de ataque que resisten por golpe. Dependiendo del juego puede haber más tipos de atributos variados. También existen las unidades que no tienen acción, normalmente suelen ser animales, árboles y demás recursos.</p>
                    </div>
                    <div class="slide">
                      <h1> Modo de juego</h1>
                      <p> La primera se basa en el juego de un jugador, donde hay una campaña o una serie de campañas que pueden estar conectadas en las cuales suele haber un héroe o un personaje característico con unos rasgos muy marcados. En esas campañas suelen discurrir situaciones épicas o históricas. En la segunda vertiente, el juego se enfoca en modo multijugador, casi en su totalidad en red o a través de internet. Aquí no es habitual la aparición de héroes, y prima la habilidad de gestionar y administrar la población y ejércitos de forma rápida y eficaz</p>
                    </div>
                    <div class="slide">
                      <h1> Proximamente</h1>
                      <p> El juego aun esta en desarrollo , por ahora estos son algunas de sus caracteristicas </p>
                    </div>
                    
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

      <?php
          include_once('components/footer.php');
        ?>
  </body>
</html>
