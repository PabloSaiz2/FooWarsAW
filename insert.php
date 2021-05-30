<?php
include_once('includes/bootup.php');
require_once('includes/validation.php');
use  es\fdi\ucm\aw\insertForm;
$formulario = new InsertForm("insertForm");
$form=$formulario->gestiona();
$tituloPagina="añadir producto";
$contenido=<<<EOF
<div class="container">
<h1>Añadir Producto</h1>
$form
</div>
<script type="text/javascript">
</script>
EOF;
require_once __DIR__.'/includes/plantillas/plantillaform.php';
?>
