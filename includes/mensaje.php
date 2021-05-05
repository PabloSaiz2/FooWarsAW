<?php
	include_once('comentario.php');
	include_once('conexion.php')
?>
<?php
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
		function cargarhilos(){

			
		}
		function insertMensaje($date){
			$host="localhost";
   	 		$user="root";
    		$bd="iron";
    		$contraseña="";

    		$conexion=new mysqli($host,$user,$contraseña,$bd);
			$query ="INSERT INTO hilos (titulo,fecha,mensaje,id_U) VALUES ('$this->informacion','2000-20-2','aaaa','$this->creador')";
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
