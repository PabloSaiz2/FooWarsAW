<?php
	namespace es\fdi\ucm\aw\comentario;
	
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
		function insertMensaje($date){
			$query = sprintf("INSERT INTO hilos (titulo,fecha,mensaje,id_U) VALUES (%d,%s,%d,%s)"
			,$this->informacion
			,$date
			,$this->mensaje
			,$this->creador);
			$resultado=$conexion->query($query);
			if($resultado){
				return $resultado;
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
	}


?>
