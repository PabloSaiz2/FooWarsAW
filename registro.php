<?php
    require_once('bootup.php');
    require_once('validation.php');

    $tituloPagina='Baguettes of Iron - Login';

    $contenido=<<<EOF
      <div class="container">
          <h1>Registro</h1>
            <?php
                use es\fdi\ucm\aw\RegisterForm;
                $formulario = new RegisterForm("registerForm");
                $formulario->gestiona();
            ?>
        </div>
    EOF;
require_once __DIR__.'/includes/plantillas/plantillaform.php';
