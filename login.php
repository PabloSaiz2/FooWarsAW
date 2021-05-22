<?php
    include_once('includes/bootup.php');
    require_once('includes/validation.php');
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
        include_once('includes/comun/header.php');
      ?>
      <div class="container">
          <h1>Login</h1>
                <?php
                  use  es\fdi\ucm\aw\LoginForm;
                  $formulario = new LoginForm("loginForm");
                  $formulario->gestiona();
                ?>
      </div>
  </body>
</html>
