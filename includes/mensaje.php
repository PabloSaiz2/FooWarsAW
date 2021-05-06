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
			$retur ='<h1>hilos<h1>';
			while($hilo=$comentarios->fetch_assoc()){
				$id1= $hilo['id'];
				$title=$hilo['titulo'];
				$retur.=<<<EOS
				<a href = ' discussion.php?id= $id1 '> $title </a><br>
				EOS;
			}
			return $retur;
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
