<?php
include_once('includes/bootup.php');
require_once('includes/validation.php');
use es\fdi\ucm\aw\adminRegisterForm;
$formulario = new AdminRegisterForm("registerForm");
$form=$formulario->gestiona();
$tituloPagina="Admin-Añadir usuario";
$contenido=<<<EOF
<div class="container">
<h1>Añadir Usuario -Admin </h1>
$form
</div>
<script type="text/javascript">
</script>
EOF;
  require_once __DIR__.'/includes/plantillas/plantillaform.php'; 
?>