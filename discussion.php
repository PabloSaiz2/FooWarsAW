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
  $contenido=" ";
  while($mensaje = $comentarios->fetch_assoc()){
    $if=$mensaje['id_usuario'];
    $ids=$com->getnombrecreador($if);
    $fecha =$mensaje['fecha'];
    $intento=$mensaje['comentario'];
    $contenido.=<<<EOF
    <div class='comentario'>
    <p> $intento </p>
    <p id='creador'>autor:$ids</p>
    <p id='fecha'>$fecha<p></br>
    </div>
    EOF;
  }
  $formulario->sethilo($padre);
  $formulariocomentarios =$formulario->gestiona();
  $tituloPagina='Baguettes of iron - comentarios';
  $contenido.=<<<EOF
  $formulariocomentarios
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
?>