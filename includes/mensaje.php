<?php
	namespace es\fdi\ucm\aw;
	class Mensaje{
		private $informacion;
		private $comentarios;
		private $creador;
		private $publico;
		private $mensaje;
		private $ncom;
		public function __Construct($hilo,$creador,$publico,$mensajes){
			$this->informacion=$hilo;
			$this->comentarios= array();
			$this->creador=$creador;
			$this->publico=$publico;
			$this->mensaje=$mensajes;
			$this->ncom = 0;
		}
		function cargarhilos($numero){
			
  			$numero_inicial=5*($numero-1);
  			$numero_final =5*($numero);
  			$busca = "SELECT * FROM hilos WHERE id BETWEEN  '$numero_inicial' AND '$numero_final' ";
  			$comentarios = Aplicacion::getInstance()->conexionBD()->query($busca);
			return $comentarios;
		}
		function insertMensaje($date){
			$inserta ="INSERT INTO hilos (titulo,fecha,mensaje,id_U) VALUES ('$this->informacion','$date','$this->mensaje','$this->creador')";
			$operacion=Aplicacion::getInstance()->conexionBD()->query($inserta);
			if($operacion){
				return $operacion;
			}
		}
		function get_info(){
			return $this->informacion;
		}
		function addcomentario($coment){
			// añade al array comentarios , coment
			array_push($this->comentarios, $coment);
			//al ser un array puedes hacer un lenght de ese array y te devuelve el tamaño xd
			//si haces un ++ de ncom ,tambien tienes que tener un --
			// $this->comentarios['1'] = $coment;
			$this->ncom++;
		}
		function get_list(){
			return $this->comentarios;
		}
		function encuentraid($usuario){
			$busca = "SELECT id FROM usuarios WHERE usuario = '$usuario' ";
			$conexion=Aplicacion::getInstance()->conexionBD()->query($busca);
			$ids =$conexion->fetch_assoc();
			$this->creador=$ids['id'];
			return $this->creador;
		}
	}


?>
