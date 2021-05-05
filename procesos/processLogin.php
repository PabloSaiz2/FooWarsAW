<?php
    //include_once('../conexion.php');
    include_once('../includes/bootup.php');
    include_once('../includes/validation.php');
    include_once('../includes/functions.php');
    use es\fdi\ucm\aw\Usuario;
    //Hasta que tengamos hecha la base de datos va a ir con valores harcodeados
    $usuario=$_POST['user'];
    $password=$_POST['userpass'];
    if(isValidLogin()){
        $result = Usuario::login($usuario,$password);
        if($result){
            createLogguedSession($result->getName());
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