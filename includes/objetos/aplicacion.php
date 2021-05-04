<?php
    class Aplicacion 
    {
        private static  $instance = null;
        private $conn = null;
        private $datosBD=null;
        public function getInstance(){
            if($instance==null)
                $instance = new Aplicacion();
            return $instance;
        }
        public function init($datosBD){
            $this->$datosBD =$datosBD;
        }
        public function conexionBD(){
            if($this->$conn==null){
                $this->$conn = new mysqli($this->$datosBD['host'],$this->$datosBD['user'],$$this->$datosBD['pass'],$this->$datosBD['bd']);
            }
            return $this->$conn;
        }
    }
    
?>