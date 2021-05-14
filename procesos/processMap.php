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
        $username=$username.".boimap";
        $file = fopen("../uploads/maps/".$username,"w");
        fwrite($file,$mapData);
        fclose($file);
        $query="INSERT INTO mapa (nombre, ruta) VALUES(?,?)";
        $preparedStatement = Aplicacion::getInstance()->conexionBD()->prepare($query);  
        $preparedStatement->bind_param('ss',$title,$username);
        $preparedStatement->execute();
        header("Location: ../dashboard.php");
    }
    else
        header("Location: ../map.php");
?>