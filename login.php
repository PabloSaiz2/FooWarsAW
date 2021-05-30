<?php
    include_once('includes/bootup.php');
    require_once('includes/validation.php');
    use  es\fdi\ucm\aw\loginForm;
    $formulario = new LoginForm("loginForm");
    $form=$formulario->gestiona();
    $tituloPagina="Baguettes of iron-login";
    $contenido=<<<EOF
      <div class="container">
          <h1>Login</h1>
           $form
      </div>
    EOF;
    require_once __DIR__.'/includes/plantillas/plantillaform.php'; 
?>
