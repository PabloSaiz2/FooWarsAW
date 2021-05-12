<?php
    require_once('../includes/bootup.php');
    require_once('../includes/functions.php');
    use es\fdi\ucm\aw\UploadException;
    use es\fdi\ucm\aw\Articulo;
    if($_SERVER['REQUEST_METHOD']=='POST'){
        $numBloques = getNumBlocks();
        $numImgBloques = getImgBlocks();
        $bloques = array();
        try{
            for ($i=0; $i < $numBloques+$numImgBloques; $i++) {
             
                if(isset($_POST['field'.$i])){
                    $contenido = $_POST['field'.$i];
                    $contenido = htmlspecialchars($contenido);
                    array_push($bloques,$contenido);
                }
                else if(isset($_FILES['img'.$i])){
                
                    $fichero =$_FILES['img'.$i];
                    if(is_uploaded_file($fichero['tmp_name'])){
                        $finfo =  new finfo(FILEINFO_MIME_TYPE);
                        $type = $finfo->file($fichero['tmp_name']);
                        if($type=="image/png"){
                            $date = new DateTime("now",new DateTimeZone("Europe/Madrid"));
                            $nombreFinal = $date->format("Y-m-d H i s").".png";
                            $fichero_subido = $UPLOAD_DIR."\images\ ".$nombreFinal;
                            
                            if(move_uploaded_file($fichero['tmp_name'],$fichero_subido)){
                                array_push($bloques,$nombreFinal);
                            }
                            else{
                                throw new UploadException("Error subiendo una de las fotos");
                            }
                        }
                    }
                }
                else{
                    throw new UploadException("Error en el formulario de edición");
                }
            }
        }
        catch(UploadException $ex){
            $ex->redirect();
        }
        
        Articulo::actualiza($_GET['title'],$bloques);
        header("Location: ../wikiArticle.php?title=".$_GET['title']);
    }