<?php
    namespace es\fdi\ucm\aw;
    class Usuario 
    {
        private $nombre;
        private $rol;
        private $contra;
        private function __construct($name,$pass,$role){
            $this->nombre =$name;
            $this->rol =$role;
            $this->contra =$pass;
        }
        public function getName(){
            return $this->nombre;
        }
        public static function buscarUsuario($nombreUsuario){
            $preparedStatement=Aplicacion::getInstance()->conexionBD()->prepare("SELECT usuario,password,rol_id FROM usuarios WHERE usuario=?");
            $preparedStatement->bind_param("s",$nombreUsuario);
            $preparedStatement->execute();
            $preparedStatement->store_result();
            if($preparedStatement->num_rows>0){
                $preparedStatement->bind_result($user,$userPass,$userRole);  
                $preparedStatement->fetch();
                return new Usuario($user,$userPass,$userRole);
            }
            $preparedStatement->close();
            return false;
        }
        //Lo de la pimienta lo haria más adelante con un fichero una enviroment variable
        private static function encrypt($password_to_encrypt){
            return password_hash($password_to_encrypt."baguette",PASSWORD_BCRYPT);
        }
        private function compruebaPassword($password){
            $correct = false;
            if(password_verify($password."baguette",$this->contra))
                $correct = true;
            return $correct;
        }
        public static function login($nombreUsuario,$password){
            $usuario = Usuario::buscarUsuario($nombreUsuario);
            if($usuario){
                if($usuario->compruebaPassword($password)){
                   
                    return $usuario;
                }
            }
            return false;
        }
        public static function crea($nombreUsuario,$password,$nombre,$apellidos,$correo,$rol){
            $hashed = Usuario::encrypt($password);
            $preparedStatement = Aplicacion::getInstance()->
            conexionBD()->
            prepare("INSERT INTO usuarios (usuario,password,nombre,apellidos,correo,rol_id) VALUES(?,?,?,?,?,?)");
            $preparedStatement->bind_param("sssssi",$nombreUsuario,$hashed,$nombre,$apellidos,$correo,$rol);
            $preparedStatement->execute();
            $preparedStatement->close();  
        }
    }
    
?>