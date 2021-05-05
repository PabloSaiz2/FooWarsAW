<?php
  $tituloPagina = 'Baguettes of Iron - Login';
  $contenido =<<<EOF
      <div class="container">
          <h1>Login</h1>
                <?php
                  use  es\fdi\ucm\aw\LoginForm;
                  $formulario = new LoginForm("loginForm");
                  $formulario->gestiona();
                ?>
      </div>
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaform.php'; 