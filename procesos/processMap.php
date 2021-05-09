<?php
    //require_once('../conexion.php');
  
    require_once('../includes/bootup.php');
    require_once('../includes/validation.php');
    require_once('../includes/logincheck.php');
    use es\fdi\ucm\aw\Aplicacion;
    $mapData=$_POST['stringMap'];
    $title=$_POST['mapName'];
    $username = $_SESSION['username'];
    if(isset($_POST['stringMap'])&&isset($_POST['mapName'])){
        $file = fopen("../maps/".$username.".bohmap","w");
        fwrite($file,$mapData);
        fclose($file);
        $query="INSERT INTO mapa (nombre, ruta) VALUES('$title','maps/$username.boimap')";
        Aplicacion::getInstance()->conexionBD()->query($query);  
        header("Location: ../dashboard.php");
    }
    header("Location: .");
?>