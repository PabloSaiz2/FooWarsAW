<?php
	require_once('includes/bootup.php');
  require_once('includes/validation.php');
  use es\fdi\ucm\aw\{comentario,Mensaje,Aplicacion,comentarioForm};

	$padre=$_GET['id'];
	$comentarios=comentario::cargacomentario($padre);
  $formulario = new comentarioForm("comentarioFormForm");
  $formulario->sethilo($padre);
  $formulariocomentarios =$formulario->gestiona();
  $tituloPagina='Baguettes of iron - comentarios';
  $contenido=<<<EOF
  <div>$comentarios</div>
  $formulariocomentarios
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
?>
