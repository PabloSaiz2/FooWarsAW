<?php
    require_once('includes/bootup.php');
    require_once('includes/validation.php');
    use es\fdi\ucm\aw\{comentario,Mensaje,Aplicacion};
?>
<?php
  /*$mensaje1 = new Mensaje("hilo1","Antonio",'true',"all") ;
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
  $lista = array('1' => $mensaje1 ,'2' => $mensaje2 );*/
  $pagina = $_GET['pag'];
  $foro=Mensaje::cargarhilos($pagina);  
 // $tituloPagina = 'Baguettes of iron -Foro';
   //         while($hilo=$comentarios->fetch_assoc()){	
    //          	$id1= $hilo['id'];
              //"<a href='discusion.php?id=" . $hilo1->$id ."'>". $hilo1->$titulo "</a>;"
              //"<a href='discusion.php?id='>". $hilo2->$titulo "</a>"
      //        	echo "<div>";
        //      	echo "<a href = ' discusion.php?id=". $id1 ."'>" . $hilo['titulo'] . "</a>";
         //     	echo "<div>";
           // }
  $tituloPagina = 'Baguettes of iron -Foro';
  $contenido=<<<EOF
      $foro
      <section>
          <div >

              <hr>
              <form action = "nuevomensaje.php " method = "post">
              <p>crea un nuevo hilo</p>
              <input id="comentario"type = 'text' name ='comentario' value=''>
              <br/>
              <input id="informacion"type = 'text' name ='informacion' value=''>
              <br/>
              <input type = 'submit' value='confirmar'>
              </form>
            <hr>
              
              
          </div>
      </section>
  EOF;
  require_once __DIR__.'/includes/plantillas/plantillaB.php'; 
?>
