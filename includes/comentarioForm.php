<?php
  namespace es\fdi\ucm\aw;
    class ComentarioForm extends Form{
        private $hilo;
        public function sethilo($padre){
            $this->hilo=$padre;
        }
        public function generaCamposFormulario($datosIniciales){
			$contenido=<<<EOF
            <form id="formulario">
            <section>
            <div>
            <hr>
            <p>escribe un comentario</p>
            <input id="comentario" type="text" name="comentario" value=""><br/>
            <input id="hilopadre" name="padre" value=$this->hilo>
            <br/>
            <input type ="submit" value="confirmar">
            </hr>
            </div>
            </section>
            </form>
            EOF;
            return $contenido;
		}
        public function procesaFormulario($datos){
			if(isset($_SESSION['login'])){
                $nombre=$_SESSION['username'];
                $comentario=$datos['comentario'];
                $hilopadre = $datos['padre'];
                $com = new comentario('',$comentario,$hilopadre);
                $idusuario=$com->encuentraid($nombre);
                $fecha=date("Y-m-d");
                if($com->insertcomentario($fecha)){
					return  "index.php";
				}
				else return  array("Error en la insercion");
			}
			else return array("No estas logeado");
        }
    }