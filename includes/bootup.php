<?php
    session_start();
    ini_set('default_charset','UTF8');
    setlocale(LC_ALL,'es_ES.UTF8');
    date_default_timezone_set('Europe/Madrid');
    require_once('objetos/aplicacion.php');
    //use es\fdi\ucm\aw;
    Aplicacion::getInstance()->init(array('host'=>'localhost','bd'=>'iron','user'=>'root','pass'=>''));
?>