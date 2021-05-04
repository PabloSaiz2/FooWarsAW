<?php
    //require_once('../conexion.php');
    require_once('../bootup.php');
    require_once('../validation.php');
    require_once('../logincheck.php');
    $mapData=$_POST['stringMap'];
    $title=$_POST['mapName'];
    $username = $_SESSION['username'];
        $file = fopen("../maps/".$username.".bohmap","w");
        fwrite($file,$mapData);
        fclose($file);
        $query="INSERT INTO mapa (nombre, ruta) VALUES('$title','maps/$username.bohmap')";
        Aplicacion::getInstance()->query($query);  
        header("Location: ../dashboard.php");
?>