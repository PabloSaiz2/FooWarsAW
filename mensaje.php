<?php
	include_once('comentario.php');
	class Mensaje{
		private $informacion;
		private $comentarios;
		private $creador;
		private $publico;
		private $permitidos;
		private $ncom;
		public function __Construct($hilo,$creador,$publico,$permitidos){
			$this->informacion=$hilo;
			$this->comentarios= array();
			$this->creador=$creador;
			$this->publico=$publico;
			$this->permitidos=$permitidos;
			$this->ncom = 0;
		}
		function get_info(){
			return $this->informacion;
		}
		function addcomentario($coment){
			$this->comentarios['1'] = $coment;
			$this->ncom++;
		}
		function get_list(){
			return $this->comentarios;
		}
	}


?>
