<?php

   $tituloPagina= 'Baguettes of Iron - Contacto';

   $contenido=<<<EOF
   <h1>Miembros</h1>
   <section class="miembros-about">
 
	
	

	<div class="row-miembros">
		<div class="flip-card">
			<div class="flip-card-inner">
				<div class="flip-card-front">
				<img src="img/Antonio.jpg" alt="Avatar" style="width:300px;height:300px;">
				</div>
				<div class="flip-card-back">
				<h1>Antonio Garcia</h1>
				<p>Engineer and FullStack</p>
				<p> celsogar@ucm.es</p>
				<p>Estudiante de Ingeniería Informática ,aficionado a futbol , equipo favorito FC Barcelona.<p>
				</div>
			</div>
		</div>
		
		<div class="flip-card">
			<div class="flip-card-inner">
				<div class="flip-card-front">
				<img src="img/rafael.jpg" alt="Avatar" style="width:300px;height:300px;">
				</div>
				<div class="flip-card-back">
				<h1>Rafael Marquez</h1>
				<p>Engineer and FullStack</p>
				<p> Rafmarqu@ucm.es</p>
				<p>Soy un estudiante de ingeniería informática me gustan los videojuegos 
				asi como los temas relacionados con la informatica y las peliculas 
				de ciencia-ficcion<p>
				</div>
			</div>
		</div>
		
		<div class="flip-card">
			<div class="flip-card-inner">
				<div class="flip-card-front">
				<img src="img/Pablo.jpg" alt="Avatar" style="width:300px;height:300px;">
				</div>
				<div class="flip-card-back">
				<h1>Pablo Saiz</h1>
				<p>Engineer and FullStack</p>
				<p> pabsaiz@ucm.es</p>
				<p>Mi afición es la música<p>
				</div>
			</div>
		</div>
	</div>

	<div class="row-miembros">
	
		<div class="flip-card">
		<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="img/Mario.jpg" alt="Avatar" style="width:300px;height:300px;">
			</div>
			<div class="flip-card-back">
			<h1>Mario Landaburu</h1>
			<p>Engineer and FullStack</p>
			<p> mariolan@ucm.es</p>
			<p> Aficionado a la historia y a los juegos de estrategia.<p>
			</div>
		</div>
		</div>
		<div class="flip-card">
		<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="img/Luis.jpg" alt="Avatar" style="width:300px;height:300px;">
			</div>
			<div class="flip-card-back">
			<h1>Luis Montenegro</h1>
			<p>Engineer and FullStack</p>
			<p> lmontene@ucm.es</p>
			<p> Le apasiona coleccionar sellos .<p>
			</div>
		</div>
		</div>
		
		<div class="flip-card">
		<div class="flip-card-inner">
			<div class="flip-card-front">
			<img src="img/ikram.jpg" alt="Avatar" style="width:300px;height:300px;">
			</div>
			<div class="flip-card-back">
			<h1> Ikram Benali</h1>
			<p>Engineer and FullStack</p>
			<p> ikramben@ucm.es</p>
			<p> Estudiando ingenieria informatica le gustan las peliculas romanticas 
			ir al teatro y escuchar musica  .<p>
			</div>
		</div>
		</div>
	</div>





</section>

<style>

h1{
	text-align: center;
}
.miembros-about{
	display:flex;
	
	flex-direction: column ;
	justify-content: center ;
}
.row-miembros{
	display:flex;
	margin:4vh auto;
	flex-direction: row ;
	

}
.flip-card {
	background-color: transparent;
	width: 300px;
	height: 300px;
	perspective: 1000px;
	
	
  }
  
  .flip-card-inner {
	position: relative;
	width: 100%;
	height: 100%;
	text-align: center;
	transition: transform 0.6s;
	transform-style: preserve-3d;
	box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
  }
  
  .flip-card:hover .flip-card-inner {
	transform: rotateY(180deg);
  }
  
  .flip-card-front, .flip-card-back {
	position: absolute;
	width: 100%;
	height: 100%;
	-webkit-backface-visibility: hidden;
	backface-visibility: hidden;
  }
  
  .flip-card-front {
	background-color: #bbb;
	color: black;
  }
  
  .flip-card-back {
	background-color: rgb(105, 76, 43);
	color: white;
	transform: rotateY(180deg);
	
  }
  .flip-card-back h1{
	  margin:10%;
  }
  .flip-card-back p{
	  margin:10%;
  }
</style>


EOF;
require_once __DIR__.'/includes/plantillas/plantillaB.php'; 