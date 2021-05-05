<?php
  namespace es\fdi\ucm\aw;
    class LoginForm extends Form
    {
        public function generaCamposFormulario($datosIniciales){
            return '<form>

            <div class = "formulario">

                <div class="contenido">
                  <label for="username">Usuario:</label>
                  <input id ="username" type="text" name = "user" placeholder = "usuario">
                </div>
            
                <div class="contenido">
                  <label for="password">Contraseña:</label>
                  <input id ="password" type="password" name = "userpass" placeholder = "Contraseña">
                </div>
            
                <input class="btn" type="submit" value="Login"></button>
            </div>
        </form>';
        }
        public function procesaFormulario($datos){
           $result = Usuario::login($datos['user'],$datos['userpass']);
           if($result){
                $_SESSION['login'] = true;
                $_SESSION['username'] = $datos['user'];
               return "index.php";
               
           }
           else{
               return array("Nombre o contraseña inválidos");
           }
        }
    }

?>