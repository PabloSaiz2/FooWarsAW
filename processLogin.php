<?php
    require_once('bootup.php');
    require_once('validation.php');
    require_once('functions.php');
    //Hasta que tengamos hecha la base de datos va a ir con valores harcodeados
    if(isValidLogin()){
        if($_POST['user']=='Ambrosio'&&$_POST['userpass']=='elcaloreh123'){
            createLogguedSession();
            header("Location: ./index.php");
        }
        else{
            header("Location: ./login.php");
        }
    }
?>