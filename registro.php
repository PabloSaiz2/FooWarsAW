<?php
    require_once('bootup.php');
    require_once('validation.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css?v=<?php echo(rand());?>">
    <link rel="stylesheet" type = "text/css" href="css/color.css?v=<?php echo(rand());?>">
    
    <title>Baguettes of Iron - Login</title>
  </head>
  <body>
      <?php
        include_once('header.php');
      ?>
      <div class="container">
          <h1>Registro</h1>
            <form  action="processRegistro.php" method="post"  id="formulario" >
                <div class = "formulario">

                    <input id ="usuario" type="text" name = "user" placeholder ="usuario">
                
                    <input id ="password" type="password" name = "userpass" placeholder = "Contraseña" required>

                    <input id ="password2" type="password" name = "userpass2" placeholder = "Repite Contraseña" required>
                    
                    <input id ="name" type="text" name = "name" placeholder = "nombre">
                    
                    <input id ="lastname" type="text" name = "lastname" placeholder = "apellido">
                    
                    <input id ="email" type="email" name = "email" placeholder = "correo@ucm.es">
                    
                    <!-- esto es para la vidta de administrador -->
                    <!-- <label for="rol">Rol:</label>
                        <select name="rol" id="rol">
                            <option value="user">User</option>
                                
                        </select> -->
                      
                        <input class="btn" type="submit" value="Registrarse"></button>
                </div>
            </form>
        </div>
  </body>
</html>