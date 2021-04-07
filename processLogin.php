<?php
    require_once('conexion.php');
    require_once('bootup.php');
    require_once('validation.php');
    require_once('functions.php');
    //Hasta que tengamos hecha la base de datos va a ir con valores harcodeados
    $usuario=$_POST['user'];
    $contraseña=$_POST['userpass'];

    if(isValidLogin()){
        $query= "SELECT * FROM usuarios WHERE usuario= '$usuario' AND contraseña= '$contraseña'";
        $consulta= mysqli_query($conexion,$query);

        if($row=mysqli_fetch_assoc($consulta)){
            createLogguedSession();
            header("Location: ./index.php");
        }
        else{
            header("Location: ./login.php");
        }
    }
    //no login valido
    else{
        header("Location: ./login.php");
    }
?>