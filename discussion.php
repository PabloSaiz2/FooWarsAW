<?php
	require_once('bootup.php');
    require_once('validation.php');
    include_once('mensaje.php');
    include_once('comentario.php');
    include_once('conexion.php')
?>
<?php
	$padre=$_GET['id'];
	$busqueda = "SELECT * FROM comentarios WHERE id_hilo = '$padre' ";
	$comentarios = $conexion->query($busqueda);
	$mensaje 
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type = "text/css" href="css/master.css">
    <title>Baguettes of Iron</title>
  </head>
  <body>
      <?php
        include_once('header.php');
      ?>    
         <section>
          <div>
          <?php
             while($mensaje = $comentarios->fetch_assoc()){
             	echo $mensaje['comentario'];
             }
          ?>
		</div>
	</section>
</body>
</html>