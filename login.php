<?php
  $tituloPagina = 'Baguettes of Iron - Login';
  $contenido =<<<EOF
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
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaform.php'; 