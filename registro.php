<?php
    require_once('bootup.php');
    require_once('validation.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
    <title>Baguettes of Iron - Login</title>
  </head>
  <body>
      <?php
        include_once('header.php');
      ?>
      <section>
            <form  action="processRegistro.php" method="post">
                <div class = "input-div">
                    <label for="username">Usuario:</label>
                    <input id ="user" type="text" name = "user" placeholder = "usuario">
                </div>
                <div class = "input-div">
                    <label for="password">Contraseña:</label>
                    <input id ="password" type="password" name = "userpass" placeholder = "******">
                </div>
                <div class = "input-div">
                    <label for="password2">Repetir Contraseña:</label>
                    <input id ="password2" type="password" name = "userpass2" placeholder = "******">
                </div>
                <div class = "input-div">
                    <label for="name">Nombre:</label>
                    <input id ="name" type="text" name = "name" placeholder = "nombre">
                </div>
                <div class = "input-div">
                    <label for="lastname">Apellido:</label>
                    <input id ="lastname" type="text" name = "lastname" placeholder = "apellido">
                </div>
                <div class = "input-div">
                    <label for="email">Correo:</label>
                    <input id ="email" type="email" name = "email" placeholder = "correo@ucm.es">
                </div>
                <div class = "input-div">
                    <label for="rol">Rol:</label>
                    <select name="rol" id="rol">
                        <option value="user">User</option>
                        
                    </select>
                </div>
                <div class = "input-div">
                    <button type="submit">Registrarse</button>
                </div>
            </form>
      </section>
  </body>
</html>