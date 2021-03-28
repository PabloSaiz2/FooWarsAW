<?php
	class Mensaje{
		private $informacion;
		private $comentarios;
		private $creador;
		private $publico;
		private $permitidos;

		public function __Construct($hilo,$creador,$publico,$permitidos){
			$this->informacion=$hilo;
			$this->comentarios= array();
			$this->creador=$creador;
			$this->publico=$publico;
			$this->permitidos=$permitidos;
		}
		function get_info(){
			return $this->informacion;
		}
	}


?>
