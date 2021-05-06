<?php
	require_once('includes/bootup.php');
  require_once('includes/validation.php');
  use es\fdi\ucm\aw\{comentario,Mensaje,Aplicacion};

	$padre=$_GET['id'];
	$comentarios=comentario::cargacomentario($padre);
  $tituloPagina='Baguettes of iron - comentarios';
  $contenido=<<<EOF
  <div>$comentarios</div>
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
?>
