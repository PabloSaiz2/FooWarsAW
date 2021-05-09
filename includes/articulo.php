<?php
    namespace es\fdi\ucm\aw;
    class Articulo 
    {
        private $id;
        private $titulo;
        private $bloques;
        private function __construct($titulo,$bloques,$id){
            $this->id = $id;
            $this->titulo =$titulo;
            $this->bloques =$bloques;
        }
        public function getId(){
            return $this->id;
        }
        public function getBloques(){
            return $this->bloques;
        }
        public function getName(){
            return $this->titulo;
        }
        public static function buscarArticulo($titulo){
            $preparedStatement=Aplicacion::getInstance()->
            conexionBD()->
            prepare("SELECT contenido FROM bloques WHERE id_padre = (SELECT id FROM articulos WHERE titulo=?) ORDER BY id_hijo");
            $preparedStatement->bind_param("s",$titulo);
            $preparedStatement->execute();
            $preparedStatement->store_result();
            if($preparedStatement->num_rows>0){
                $bloques = array();
                $preparedStatement->bind_result($contenido);
                while ($preparedStatement->fetch()) {
                    array_push($bloques,$contenido);
                }  
                $preparedStatement=Aplicacion::getInstance()->
                conexionBD()->
                prepare("SELECT id FROM articulos WHERE titulo =?");
                $preparedStatement->bind_param("s",$titulo);
                $preparedStatement->execute();
                $preparedStatement->store_result();
                $preparedStatement->bind_result($id_articulo);
                $preparedStatement->fetch();
                return new Articulo($titulo,$bloques,$id_articulo);
            }
            $preparedStatement->close();
            return false;
        }
        public static function crea($titulo,$bloques){
            $preparedStatement = Aplicacion::getInstance()->
            conexionBD()->
            prepare("INSERT INTO articulos (titulo) VALUES(?)");
            $preparedStatement->bind_param("s",$titulo);
            $preparedStatement->execute();
            $preparedStatement->close(); 
            $articuloGuardado = Articulo::buscarArticulo($titulo);
            foreach ($bloques as $value) {
                $preparedStatement = Aplicacion::getInstance()->
                conexionBD()->
                prepare("INSERT INTO bloques (id_padre,contenido) VALUES(?,?)");
                $preparedStatement->bind_param("is",$articuloGuardado->getId(),$value);
                $preparedStatement->execute();
                $preparedStatement->close();
            }
        }
        public static function actualiza($titulo,$bloques){ 
            $articuloParaActualizar = Articulo::buscarArticulo($titulo);
            if($articuloParaActualizar){
                $id_articulo_actualizar = $articuloParaActualizar->getId();
                Aplicacion::getInstance()->
                conexionBD()->query("DELETE FROM bloques WHERE id_padre=".$articuloParaActualizar->getId());   
                foreach ($bloques as $value) {
                    $random = rand();
                    $preparedStatement = Aplicacion::getInstance()->
                    conexionBD()->
                    prepare("INSERT INTO bloques (id_hijo,id_padre,contenido) VALUES($random,?,?)");
                    $preparedStatement->bind_param("is",$id_articulo_actualizar,$value);
                    $preparedStatement->execute();
                    echo($preparedStatement->error);
                }
                $preparedStatement->close();
            }
        }
    }
    
?>