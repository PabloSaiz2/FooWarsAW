<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
    use es\fdi\ucm\aw\{comentario,mensaje,Aplicacion,forumForm};
?>
<?php
  if(isset($_GET['pag'])){
    $pagina = $_GET['pag'];
  }
  else $pagina = 1;
  $m=new Mensaje('','','','');
  $foro=$m->cargarhilos($pagina);  
  $next= ($pagina + 1);
  $tituloPagina = 'Baguettes of iron -Foro';
  $contenido=<<<EOF
      $foro
      <a href = ' forum.php?pag=$next '> Siguiente </a><br>
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
  $formulario = new forumForm("forumForm");
  $formularioforo =$formulario->gestiona();
?>
