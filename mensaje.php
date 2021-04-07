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
