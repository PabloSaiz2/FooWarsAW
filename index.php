<?php
  $tituloPagina='Baguettes of iron';
  $contenido=<<<EOF
     
      <div class="slideshow-container">

  
      <div class="mySlides fade">
       
        <img src="img/juego.jpg" style="width:100%">
        <h3> Baguettes of Iron Lanzamiento</h3>
                      <p>Baguettes of Iron Lanzamiento es un videojuego de estrategia en tiempo por turnos para computadoras personales,Una partida estándar se basa generalmente en derrotar a todas las unidades enemigas ya sean aldeanos o unidades de guerra utilizando diferentes tácticas y estrategias de guerra, pero también si captura todas las ruinas o artefactos y esperando 2000 años antes de que los imperios enemigos tomasen el control. Además, si se construye una maravilla, debe esperar 2000 años para ganar, pero el oponente debe destruirlo. Si se elige conquista, solo gana el jugador que elimina a todos los imperios oponenetes. Además, existen partidas en donde debe alcanzar el puntaje máximo o se usa un temporizador. Ten en cuenta de que cada 5 años de juego sería un segundo o dos en la vida real.</p>
                   
        
      </div>
    
      <div class="mySlides fade">
       
        <img src="img/juego-test.jpg" style="width:100%">
        <h3> Modo de juego</h3>
                      <p> La primera se basa en el juego de un jugador, donde hay una campaña o una serie de campañas que pueden estar conectadas en las cuales suele haber un héroe o un personaje característico con unos rasgos muy marcados. En esas campañas suelen discurrir situaciones épicas o históricas. En la segunda vertiente, el juego se enfoca en modo multijugador, casi en su totalidad en red o a través de internet. Aquí no es habitual la aparición de héroes, y prima la habilidad de gestionar y administrar la población y ejércitos de forma rápida y eficaz</p>
                   
      
      </div>
    
      <div class="mySlides fade">
       
        <img src="img/juego-rol.jpg" style="width:100%">
        <h3> ¿En que consiste?</h3>
        <p>Las unidades son individuos o grupos que forman una unidad independiente y se pueden controlar directamente con la interfaz del ordenador. Se puede tener un número determinado de unidades iguales o distintas, pero ese número depende de la población máxima por facción o las limitaciones de la campaña si es el caso. Estas unidades se suelen separar en unidades militares y unidades civiles. Las primeras están enfocadas al combate, en cambio las segundas son para la recolección de recursos y construcción de edificaciones. Cada unidad posee un nivel de salud, que determina la cantidad de daño que pueden recibir antes de ser eliminadas. Puntos de ataque, que son los puntos de salud que quitan a los unidades enemigas por golpe. Los puntos de defensa, que es el valor de puntos de ataque que resisten por golpe. Dependiendo del juego puede haber más tipos de atributos variados. También existen las unidades que no tienen acción, normalmente suelen ser animales, árboles y demás recursos.</p>
    
        
      </div>
    
      
      <a class="prev" onclick="plusSlides(-1)"><i class="far fa-arrow-alt-circle-left"></i></a>
      <a class="next" onclick="plusSlides(1)"><i class="far fa-arrow-alt-circle-right"></i></a>
    </div>
    <br>
    
    
    <div style="text-align:center; margin-bottom:4vh">
      <span class="dot" onclick="currentSlide(1)"></span>
      <span class="dot" onclick="currentSlide(2)"></span>
      <span class="dot" onclick="currentSlide(3)"></span>
    </div>
      


  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
?>