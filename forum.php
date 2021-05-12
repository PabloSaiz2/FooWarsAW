<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
    use es\fdi\ucm\aw\{comentario,Mensaje,Aplicacion,forumForm};
?>
<?php
  if(isset($_GET['pag'])){
    $pagina = $_GET['pag'];
  }
  else $pagina = '1';
  $m=new Mensaje('','','','');
  $foro=$m->cargarhilos($pagina);  
  $formulario = new forumForm("forumForm");
  $formularioforo =$formulario->gestiona();
 
  $tituloPagina = 'Baguettes of iron -Foro';
  $contenido=<<<EOF
      
      $foro
      $formularioforo
      EOF;
      require_once __DIR__.'/includes/plantillas/plantillaform.php'; 
    ?>