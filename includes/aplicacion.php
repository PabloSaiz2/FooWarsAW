<?php
    namespace es\fdi\ucm\aw;

    class Aplicacion 
    {
        private static  $instance = null;
        private $conn=null;
        public $datosBD=array();
        public static function getInstance(){
            if(Aplicacion::$instance==null)
                Aplicacion::$instance = new Aplicacion();
            return Aplicacion::$instance;
        }
        public function init($datos){
            $this->datosBD= $datos;
        }
        public function conexionBD(){
            if($this->conn==null){
                $this->conn = new \mysqli($this->datosBD['host'],$this->datosBD['user'],$this->datosBD['pass'],$this->datosBD['bd']);
            }        
            return $this->conn;
        }
    }
    
?>