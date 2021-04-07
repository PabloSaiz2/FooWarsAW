<?php
    require_once('conexion.php');
    require_once('bootup.php');
    require_once('validation.php');
    require_once('functions.php');
    //Hasta que tengamos hecha la base de datos va a ir con valores harcodeados
    $usuario=$_POST['user'];
    $contraseña1=$_POST['userpass'];
    $contraseña2=$_POST['userpass2'];
    $nombre=$_POST['name'];
    $apellido=$_POST['lastname'];
    $correo=$_POST['email'];
    //$rol=$_POST['userpass'];

    if(isValidRegistro()){
        //contraseñas 1 y 2 ?
        if($contraseña1==$contraseña2){
            $query="SELECT * FROM usuarios WHERE nombre='$usuario' ";
            $consulta= mysqli_query($conexion,$query);
            if ($resultado = mysqli_fetch_assoc($consulta)) {
                echo '<script> alert("usuario ya registrado");
                window.location.href="registro.php"; </script>';

            }
            else{
                    $query2="INSERT INTO usuarios (usuario,contraseña,nombre,apellidos,correo,rol_id) VALUES ('$usuario','$contraseña1','$nombre','$apellido','$correo','2')";
                     $consulta2= mysqli_query($conexion,$query2);
                    header("location:index.php");
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
        header("Location: ./registro.php");
    }
?>