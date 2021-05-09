<?php
	namespace es\fdi\ucm\aw;
	class comentario{
		private $usuario;
		public $contenido;
		private $id;
		private $idpadre;
	 	function __Construct($posteador,$mensaje,$padre){
			$this->usuario=$posteador;
			$this->contenido=$mensaje;
			$this->idpadre=$padre;
		}
		function get_usuario(){
			return $this->usuario;
		}
		function get_contenido(){
			return $this->contenido;
		}
		function insertcomentario($fecha){
			$inserta ="INSERT INTO comentarios (comentario,fecha,id_usuario,id_hilo) VALUES ('$this->contenido','$fecha','$this->usuario','$this->idpadre')";
			$operacion=Aplicacion::getInstance()->conexionBD()->query($inserta);
			if($operacion){
				return $operacion;
			}
		}
		function encuentraid($nombre){
			$busca = "SELECT id FROM usuarios WHERE usuario = '$nombre' ";
			$conexion=Aplicacion::getInstance()->conexionBD()->query($busca);
			$ids =$conexion->fetch_assoc();
			$this->usuario = $ids['id'];
			return $this->idpadre;
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
