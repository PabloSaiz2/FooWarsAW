<?php
    //require_once __DIR__ . '/aplicacion.php';
    namespace es\fdi\ucm\aw;
    class Producto 
    {
        private $nombre;
        private $description;
        private $image;
        private $idTipo;
       
        private function __construct($name,$description,$image,$idTipo){
            $this->nombre =$name;
            $this->description =$description;
            $this->image =$image;
            $this->idTipo =$idTipo;
        }
        public function getName(){
            return $this->nombre;
        }
        public function getDescripcion(){
            return $this->description;
        }
        public function getImage(){
            return $this->image;
        }
        public function getTipo(){
            return $this->idTipo;
        }
        public function getListProduct(){
            return $this->$listProductos;
        }
        /*
        public static function buscarProducto($nombre){
            $preparedStatement=Aplicacion::getInstance()->conexionBD()->prepare("SELECT * FROM produtos WHERE nombre=?");
            $preparedStatement->bind_param("s",$nombre);
            $preparedStatement->execute();
            $preparedStatement->store_result();
            if($preparedStatement->num_rows>0){
                $preparedStatement->bind_result($name,$description,$image,$idTipo);  
                $preparedStatement->fetch();
                return new Producto($name,$description,$image,$idTipo);
            }
            $preparedStatement->close();
            return false;
        }*/
        /*
        public static function productosXTipo(){

        }
        */
        public static function show(){
            $preparedStatement=Aplicacion::getInstance()->conexionBD()->prepare("SELECT * FROM produtos");
            $preparedStatement->bind_param("isssi");
            $preparedStatement->execute();
            $preparedStatement->store_result();
            if($preparedStatement->num_rows>0){
                $listProductos =Array();
                $preparedStatement->bind_result($id,$nombre,$description,$image,$type);
                while ($preparedStatement->fetch()) {
                    $item= [
                        'id' => $id,
                        'name' => $nombre,
                        'description' => $description,
                        'image' => $image,
                        'id_tipo' => $type,
                    ];
                    array_push($listProductos,$item);
                } 
                return $listProductos;
                //return new Producto($nombre,$description,$image,$type);
            }
            $preparedStatement->close();
            return false;
        }

        public static function creaProducto($nombre,$description,$image,$type){
            $preparedStatement = Aplicacion::getInstance()->conexionBD()->prepare("INSERT INTO produtos (nombre,descripcion,imagen,id_tipo) VALUES(?,?,?,?)");
            $preparedStatement->bind_param("sssi",$nombre,$description,$image,$type);
            $preparedStatement->execute();
            $preparedStatement->close();  
        }
    }
    
?>