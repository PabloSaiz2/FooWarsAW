<?php
    include_once('../conexion.php');
    include_once('../bootup.php');
    include_once('../validation.php');
    include_once('../functions.php');
    //Hasta que tengamos hecha la base de datos va a ir con valores harcodeados
    $usuario=$_POST['user'];
    $password=$_POST['userpass'];
    if(isValidLogin()){
        $query= "SELECT * FROM usuarios WHERE usuario= '$usuario' AND password= '$password'";
        $result = $conexion->query($query);
        if($result->num_rows>0){
            createLogguedSession();
            header("Location: ../index.php");
        }
        else{
            header("Location: ../login.php");
        }
    }
    //no login valido
    else{
        header("Location: ../login.php");
    }
?>