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
            <form action="processLogin.php" method="post">
                <div class = "input-div">
                    <label for="username">Usuario:</label>
                    <input id ="username" type="text" name = "user" placeholder = "Ambrosio">
                </div>
                <div class = "input-div">
                    <label for="password">Contraseña:</label>
                    <input id ="password" type="password" name = "userpass">
                </div>
                <div class = "input-div">
                    <button type="submit">Conectarse</button>
                </div>
            </form>
      </section>
  </body>
</html>
