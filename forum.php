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
  $formulario = new forumForm("forumForm");
  $formularioforo =$formulario->gestiona();
  $contenido =" ";
  while($hilo=$foro->fetch_assoc()){
    $id1= $hilo['id'];
    $title=$hilo['titulo'];
    $info =$hilo['mensaje'];
    $contenido.=<<<EOF
    <div class ='hilo'>
    <a href = ' discussion.php?id= $id1 '> $title </a><br>
    <h5 id='informacion'>$info</h5></br>
    </div>
    EOF;
  }
  $contenido.=<<<EOF
      $formularioforo
      <a href = ' forum.php?pag=$next '> Siguiente </a><br>
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 

?>