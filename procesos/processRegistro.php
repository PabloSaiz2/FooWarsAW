<?php
    include_once('../conexion.php');
    include_once('../bootup.php');
    include_once('../validation.php');
    include_once('../functions.php');
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
            $query="SELECT * FROM usuarios WHERE usuario='$usuario' ";
            
            $consulta= mysqli_query($conexion,$query);
            if ($resultado = mysqli_fetch_assoc($consulta)) {
                echo '<script> alert("usuario ya registrado");
                window.location.href="registro.php"; </script>';

            }
           
            else{
                    $query2="INSERT INTO usuarios (usuario,password,nombre,apellidos,correo,rol_id) VALUES ('$usuario','$password1','$nombre','$apellido','$correo','2')";
                     $consulta2= mysqli_query($conexion,$query2);
                     createLogguedSession();
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