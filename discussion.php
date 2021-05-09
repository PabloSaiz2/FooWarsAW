<?php
	require_once('includes/bootup.php');
  require_once('includes/validation.php');
  use es\fdi\ucm\aw\{comentario,Mensaje,Aplicacion,comentarioForm};
  if(isset($_GET['id'])){
    $padre=$_GET['id'];
  }
	else $padre ='1';
  $com=new comentario('','','');
	$comentarios=$com->cargacomentario($padre);
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
