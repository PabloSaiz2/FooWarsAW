<?php
	namespace es\fdi\ucm\aw;
	class Comentario{
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
				$if=$mensaje['id_usuario'];
				$ids=self::getnombrecreador($if);
				$fecha =$mensaje['fecha'];
				$intento=$mensaje['comentario'];
				$retur.=<<<EOS
				<div class='comentario'>
				<p> $intento </p>
				<p id='creador'>autor:$ids</p>
				<p id='fecha'>$fecha<p></br>
				</div>
				EOS;
			}
			return $retur;
		}
		function getnombrecreador($id){
			$busca = "SELECT usuario FROM usuarios WHERE id = '$id' ";
			$conexion=Aplicacion::getInstance()->conexionBD()->query($busca);
			$ids =$conexion->fetch_assoc();
			$ret = $ids['usuario'];
			return $ret;
		}
	}
?>
