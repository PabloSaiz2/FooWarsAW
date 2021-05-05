<?php
    //include_once('../conexion.php');
    
    include_once('../includes/bootup.php');
    include_once('../includes/validation.php');
    include_once('../includes/functions.php');
    use es\fdi\ucm\aw\Usuario;
    //Hasta que tengamos hecha la base de datos va a ir con valores harcodeados
    $usuario=$_POST['user'];
    $password1=$_POST['userpass'];
    $password2=$_POST['userpass2'];
    $nombre=$_POST['name'];
    $apellido=$_POST['lastname'];
    $correo=$_POST['email'];
    //$rol=$_POST['userpass'];

    if(isValidRegistro()){
        //contraseñas 1 y 2 ?
        if($password1==$password2){
            
            if (Usuario::buscarUsuario($usuario)!=false) {
                echo '<script> alert("usuario ya registrado");
                window.location.href="registro.php"; </script>';

            }          
            else{
                    Usuario::crea($usuario,$password1,$nombre,$apellido,$correo,2);
                    $registered = Usuario::buscarUsuario($usuario);
                    createLogguedSession($registered->getName());
                    header("location:../index.php");
                }
            }
        //contraseñas no son iguales        
        else{
            echo '<script> alert("contraseñas no corresponden");
                window.location.href="registro.php"; </script>';
        }
    }
    //no registro valido
    else{
        header("Location: ../registro.php");
    }
?>