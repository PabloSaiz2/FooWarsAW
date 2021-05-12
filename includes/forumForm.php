<?php
  namespace es\fdi\ucm\aw;
    class ForumForm extends Form{
		public function generaCamposFormulario($datosIniciales){
			return '<form id="formulario" >
			<section>
			<div >
  
				<hr>
				
				<p>crea un nuevo hilo</p>
				<input id="comentario" type = "text" name ="comentario" value=" ">
				<br/>
				<input id="informacion" type = "text" name ="informacion" value="">
				<br/>
				<input type = "submit" value="confirmar">
			  </hr>
				
				
			</div>
		</section>
		</form>';
		}
		public function procesaFormulario($datos){
			if(isset($_SESSION['login'])){
				$nombre=$_SESSION['username'];
				$hilo = $datos['comentario'];
				$info = $datos['informacion'];
				$m = new Mensaje($hilo,'',true,$info);
				$idusuario=$m->encuentraid($nombre);
				$fecha=date("Y-m-d");
				if($m->insertMensaje($fecha)){
					return  "index.php";
				}
				else return  array("Error en la insercion");
			}
			else return array("No estas logeado");


		}
	}