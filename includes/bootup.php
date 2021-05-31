<?php
    session_start();
    ini_set('default_charset','UTF-8');
    setlocale(LC_ALL,'es_ES.UTF8');
    date_default_timezone_set('Europe/Madrid');
    ///////////////
    //de phpfig.org
    ///////////////
    spl_autoload_register(function($class){
        $prefix="es\\fdi\\ucm\\aw";   
        $base_dir = __DIR__;//Hay que ver que poner aqui
        $len = strlen($prefix);
        if(strncmp($prefix,$class,$len)!==0){
            return;
        }
        $relative_class = substr($class,$len);
        $file = $base_dir.str_replace('\\','/',$relative_class).'.php';
        if(file_exists($file)){
            require $file;
        }
    });
    $UPLOAD_DIR = dirname(__DIR__,1)."\uploads";
    use es\fdi\ucm\aw\Aplicacion as App;
    App::getInstance()->init(array('host'=>'localhost','bd'=>'iron','user'=>'iron','pass'=>'iron')); 
?>
