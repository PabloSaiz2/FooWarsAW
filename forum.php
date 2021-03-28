<?php
    require_once('bootup.php');
    require_once('validation.php');
    include_once('mensaje.php');
    include_once('comentario.php');
?>
<?php
  $mensaje1 = new Mensaje("prueba","Antonio",'true',"all") ;
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
          echo $mensaje1->get_info();
        ?>
        </div>
      </section>
  </body>
</html>
