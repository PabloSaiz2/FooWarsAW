<?php
    include_once('bootup.php');
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
          <h1>Login</h1>
                <form action="procesos/processLogin.php" method="post">

                    <div class = "formulario">

                        <div class="contenido">
                          <label for="username">Usuario:</label>
                          <input id ="username" type="text" name = "user" placeholder = "usuario">
                        </div>
                    
                        <div class="contenido">
                          <label for="password">Contraseña:</label>
                          <input id ="password" type="password" name = "userpass" placeholder = "Contraseña">
                        </div>
                    
                        <input class="btn" type="submit" value="Login"></button>
                    </div>
                </form>
      </div>
  </body>
</html>
