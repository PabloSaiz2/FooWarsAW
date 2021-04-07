<?php
    require_once('bootup.php');
    require_once('validation.php');
    include_once('mensaje.php');
    include_once('comentario.php');
?>
<?php
  $mensaje1 = new Mensaje("hilo1","Antonio",'true',"all") ;
  $mensaje2 = new Mensaje("hilo2","Antonio",'true',"all") ;
  $comentarioA1= new comentario("rafa","prueba comentario");
  $comentarioA2= new comentario("rafa","prueba comentario2");
  $comentarioA3= new comentario("rafa","prueba comentario2");
  $comentarioB1= new comentario("rafa","prueba comentario2");
  $comentarioB2= new comentario("rafa","prueba comentario2");
  $comentarioB3= new comentario("rafa","prueba comentario2");
  $mensaje1->addcomentario($comentarioA1);
  $mensaje1->addcomentario($comentarioA2);
  $mensaje1->addcomentario($comentarioA3);

  $mensaje2->addcomentario($comentarioB1);
  $mensaje2->addcomentario($comentarioB2);
  $mensaje2->addcomentario($comentarioB3);
  $lista = array('1' => $mensaje1 ,'2' => $mensaje2 );

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
          <div >

            <?php
              $cont=0;
              foreach ($lista as  $value) {
                echo "<hr><div>";
                echo "<h2>" .$value->get_info() . "</h2>";
                // $res = $value->get_list();
                //echo  "<button type='button' >cargar comentarios</button>";
                // echo  "<button type='button' onclick='cargarlista('$res')'>cargar comentarios</button>";
                
                foreach ( $value->get_list() as $val) {
                  echo "<h3>". $val->get_contenido() . "<h3>";
                }
                echo "</div>";
              }
            ?>
              <hr>
              <p>Escribe un comentario</p>
              <input id="comentario"type = 'text' name ='comentario' value=''>
              <br/>
              <input type = 'submit' value='confirmar' onclick="cargarComentario()">
            <hr>
              <div id='comentariosNuevos'></div>
              
          </div>
      </section>

      <script type="text/javascript">

        document.getElementById('btn1').onclick = function () {
                        alert('hola mundo!');
        }
        function cargarComentario(){
          var elemento = document.createElement("h3");
          var mensaje=document.getElementById('comentario').value;
          elemento.innerHTML=mensaje;
          document.getElementById("comentariosNuevos").appendChild(elemento);
        }

      
      </script>
  </body>
</html>
