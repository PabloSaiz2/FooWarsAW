<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
    use es\fdi\ucm\aw\registerForm;
    $formulario = new RegisterForm("registerForm");
    $form=$formulario->gestiona();
    $tituloPagina="Baguettes of iron-registro";
    $contenido=<<<EOF
      <div class="container">
          <h1>Registro</h1>
           $form
      EOF;
      require_once __DIR__.'/includes/plantillas/plantillaform.php'; 
          
    ?>