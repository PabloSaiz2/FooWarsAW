<?php
	class comentario{
		private $usuario;
		public $contenido;
		private $respuestas;
	}
	 function __Construct($posteador,$mensaje){
		$this->usuario=$posteador;
		$this->contenido=$mensaje;
		$this->respuestas= [];
	}
	function get_usuario(){
		return $this->usuario;
	}
	function get_contenido(){
		return $this->contenido;
	}
	function addcomentario(){

	}
	function deletecomentario(){

	}
?>
