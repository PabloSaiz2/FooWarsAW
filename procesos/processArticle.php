<?php
    require_once('../includes/bootup.php');
    require_once('../includes/functions.php');
    $numBloques = getNumBlocks();
    $bloques = array();
    for ($i=0; $i < $numBloques; $i++) {
        $contenido =$_POST['field'.$i];
        $contenido = htmlspecialchars($contenido);
        array_push($bloques,$contenido);
    }
    use es\fdi\ucm\aw\Articulo;
    Articulo::actualiza($_GET['title'],$bloques);
    header("Location: ../wikiArticle.php?title=".$_GET['title']);