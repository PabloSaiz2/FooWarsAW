<?php
    require_once('conexion.php');
    require_once('bootup.php');
    require_once('validation.php');
    require_once('logincheck.php');
    $mapData=$_POST['stringMap'];
    $title=$_POST['mapName'];
    $username = $_SESSION['username'];
        $file = fopen("maps/".$username,"w");
        fwrite($file,$mapData);
        $query= "INSERT INTO mapa VALUES('$title','$username')";
        $conexion->query($query);
        fclose($file);
        header("Location./dashboard.php");
    //no login valido
    
?>