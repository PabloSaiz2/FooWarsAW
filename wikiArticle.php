<?php
  require_once("includes/bootup.php");
  require_once("includes/validation.php");
  $tituloPagina = "Wiki - Articulo";
    $tituloEdicion = $_GET['title'];
    $contenido = "";
    if(isValidSession()){
      $contenido .= "<div>
                        <a id = 'edit' href='wikiEditor.php?title=$tituloEdicion' >Editar &#9881</a>
                    </div>";
    }
    $contenido .= '<aside class="wiki" id ="wiki-aside">
                    <h3>La Wiki de Baguettes of Iron</h3>
                    <section>
                      <h3 class = "wiki-aside-header text-header">Normas y links relevantes</h3>
                      <a href="#">Normas de estilo</a>
                      <a href="#">Página principal</a>
                      <h3 class = "wiki-aside-header text-header">Herramientas</h3>
                      <a href="#">Cambios relacionados</a>
                      <a href="#">Páginas especiales</a>
                      <h3 class = "wiki-aside-header text-header">Baguettes of Iron Links</h3>
                      <a href="#">Mods</a>
                    </section>
                  </aside>';
    use es\fdi\ucm\aw\Articulo;
    $articulo = Articulo::buscarArticulo($tituloEdicion);
    if($articulo){
    $nombre_articulo = $articulo->getName();
    $contenido .= "<section class='wiki' id='wiki-main'>
                    <h2>$nombre_articulo</h2>
                    <img src='img/logo_baguettes_of_iron.jpg' alt=''>";
                    foreach ($articulo->getBloques() as $bloque) {
                      $formatted = explode('.',$bloque);
                      if(count($formatted)==2&&$formatted[1]=="png"){
                        $contenido.="<img src='uploads/images/".$bloque."' class ='wiki-img' alt = 'Imagen de la wiki'>";
                      }
                      else
                      $contenido.="<p class='wiki-text'>$bloque</p>";
                    }
                    $contenido.="</section>";
    }
    else{
     header("Location: ./wiki.php");
    }
    require_once __DIR__.'/includes/plantillas/plantillaB.php'; 