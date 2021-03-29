<?php
    require_once('bootup.php');
    require_once('validation.php');
    include_once('mensaje.php');
    include_once('comentario.php');
?>
<?php
  $mensaje1 = new Mensaje("prueba","Antonio",'true',"all") ;
  $mensaje2 = new Mensaje("prueba2","Antonio",'true',"all") ;
  $comentario1= new comentario("rafa","prueba comentario");
  $comentario2= new comentario("rafa","prueba comentario2");
  $mensaje1->addcomentario($comentario1);
  $mensaje2->addcomentario($comentario2);
  $lista = array('1' => $mensaje1 ,'2' => $mensaje2 );

 ?>
 <script >
   function cargarlista(mensaj){
     <?php
        $res = mensaj;
        foreach ( $res as $val) {
           echo "<h3>". $val->get_contenido() . "</br><h3>";
        }
     ?>
   }
 </script>
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

            foreach ($lista as  $value) {
              echo "<h2>" . $value->get_info() . "</br></h2>";
             $res = $value->get_list();
            echo  "<button type='button'onclick = 'cargarlista('$res')'>cargar comentarios</button>";
            //  foreach ( $res as $val) {
            //    echo "<h3>". $val->get_contenido() . "</br><h3>";
            //  }
              echo "<form action = 'forum.php' method = 'post'>
              <p>escribe un comentario</p>
        			<input type = 'text' name ='comentario' value=''>
        			<br/>
        			<input type = 'submit' value='confirmar'>
        			</form>";
            }
            ?>
          </div>
      </section>
  </body>
</html>
