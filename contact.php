<?php

$tituloPagina = 'Baguettes of Iron - contacto';
$contenido=<<<EOF
   <section>
   
 
 <div>
	<div>
	<center><h1>Contact Us!</h1><center/>
	</div>
</div>

	<div>
    <center><h2>En esta seccion podras escribirnos si tienes
		alguna duda o sugerencia.
	</h2><center/>
	</div>

 
 <form accept-charset="UTF-8" action="mailto:baguettes@ucm.es" autocomplete="off" method="GET" target="_blank">
	<fieldset>
		<legend>Rellene esto:</legend>
		<! -- El nombre y el email se guardaran en nuestra base de datos. -->
		<label for="name">Nombre:</label><br />
		<input name="name" type="text" value="" /><br /><br />
		<label for="email">Email:</label><br />
		<input name="email" type="text" value="" /><br /><br />
		Motivo de la consulta:<br />
		<! -- La casilla que marque será el asunto del email para que sea mas facil a la hora de leerlos y clasificarlos. -->
		<input  checked="checked" name="subject" type="radio" value="Evaluacion" /> Evaluacion<br />
		<input name="motivo" type="radio" value="Sugerencia" /> Sugerencia<br />
		<input name="motivo" type="radio" value="Critica" /> Critica<br /><br />
		<textarea name="body" cols="60" rows="6">Escriba aquí.</textarea><br /><br />
		<input name="terminos" type="checkbox" value="1" /> Marque esta casilla para verificar que ha le&iacute;do nuestros t&eacute;rminos y condiciones del servicio<br /><br />
		<button type="submit" value="enviar">Enviar</button>
	</fieldset>
</form>


 <div>
 <center><h2>¡Gracias!</h2><center/>
</div>

<style>
div {
  border: white 3px ;
  margin: 10px;
  padding: 10px;
  background-color: lightgrey;
}
div div {
  border: white 3px solid;
  margin: 10px;
  padding: 10px;
  background-color: lightgrey;
}
</style>

	</section>
EOF;
require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
