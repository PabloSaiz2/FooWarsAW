<?php
  namespace es\fdi\ucm\aw;
    class forumForm extends Form{
		public function generaCamposFormulario($datosIniciales){
			return '<form id="formulario" >
			
  
			<fieldset>
				<legend>Crear un nuevo hilo</legend>
				<label for="comentario">Comentario:</label><br>
				<input id="comentario" type = "text" name ="comentario" value=" ">
				<br/>
				<label for="informacion">Informacion:</label><br>
				<input id="informacion" type = "text" name ="informacion" value="">
				<br/><br>

				<input type = "submit" value="confirmar">

				</fieldset>


				
				
		
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