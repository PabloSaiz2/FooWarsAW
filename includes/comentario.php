<?php
	namespace es\fdi\ucm\aw;
	class comentario{
		private $usuario;
		public $contenido;
		private $respuestas;
		private $id;
		private $idpadre;
	 	function __Construct($posteador,$mensaje){
			$this->usuario=$posteador;
			$this->contenido=$mensaje;
		}
		function get_usuario(){
			return $this->usuario;
		}
		function get_contenido(){
			return $this->contenido;
		}
		function addrespuesta(){

		}
		function deletecomentario(){

		}
		function cargacomentario($padre){
			$busqueda = "SELECT * FROM comentarios WHERE id_hilo = '$padre' ";
			$comentarios = Aplicacion::getInstance()->conexionBD()->query($busqueda);
			$mensaje;
			$retur=''; 
			while($mensaje = $comentarios->fetch_assoc()){
				$intento=$mensaje['comentario'];
				$retur.=<<<EOS
				<p> $intento </p></br>
				EOS;
			}
			return $retur;
		}
	}
?>
