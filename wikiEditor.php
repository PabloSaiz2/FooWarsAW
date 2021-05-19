<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
    require_once('includes/logincheck.php');
    use es\fdi\ucm\aw\Articulo;
    $tituloEdicion =$_GET['title']; 
    $articulo = Articulo::buscarArticulo($tituloEdicion);
    $contenido = "";
    $tituloPagina = "Wiki - Editor";
    if($articulo){
      $contenido.="<section class='wiki' id='wiki-main'>
                      <form id = 'fields' action='procesos/processArticle.php?title=$tituloEdicion' enctype = 'multipart/form-data' method='post'>
                        <button type='submit'>Guardar</button>";
      $i=0;
      foreach ($articulo->getBloques() as $bloque) {
        $contenido.="<textarea type = 'text' class = 'wiki-block' name='field$i'>$bloque</textarea>";
        ++$i;
      }
      $contenido.='   </form>
                      <button onClick="addField()">Añadir bloque</button>
                      <button onClick="addImageField()">Añadir imagen</button>
                    </section>';
    }
    else{
      header("Location: ./index.php");
    }
    require_once __DIR__.'/includes/plantillas/plantillaWiki.php'; 