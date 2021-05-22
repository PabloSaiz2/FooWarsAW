<?php
  namespace es\fdi\ucm\aw;
    class AdminRegisterForm extends Form
    {
      public function generaCamposFormulario($datosIniciales){
        return '<form id="formulario" >
        <div id="formRegister" class = "formulario form-admin">

            <input id ="usuario" type="text" name = "user" placeholder ="usuario" required>
        
            <input id ="password" type="password" name = "userpass" placeholder = "Contraseña" required>

            <input id ="password2" type="password" name = "userpass2" placeholder = "Repite Contraseña" required>
            
            <input id ="name" type="text" name = "name" placeholder = "nombre" required>
            
            <input id ="lastname" type="text" name = "lastname" placeholder = "apellido" required>
            
            <input id ="email" type="email" name = "email" placeholder = "correo@ucm.es" required>
          
            <label for="rol">Rol:</label>
                <select name="rol" id="rol">
                  <option value="1">Admin</option>
                  <option value="2">User</option>
                </select> 
              
            <input id="formRegisterSubmit" class="btn" type="submit" value="Añadir"></button>
        </div>
    </form>';
    }
    public function procesaFormulario($datos){
       $result = Usuario::buscarUsuario($datos['user']);
       if($result){
           
           return array("Usuario ya existente");
           
       }
       else{
           if($datos['userpass']!=$datos['userpass2']){
              return array("Las contraseñas no coinciden");
           }
           else{
              if(strlen($datos['userpass'])<5)
                return array("Contraseña muy corta");
              else{
                Usuario::crea($datos['user'],$datos['userpass'],$datos['name'],$datos['lastname'],$datos['email'],$datos['rol']);
                $created = Usuario::buscarUsuario($datos['user']);
                if($created){
                  $_SESSION['login'] = true;
                  $_SESSION['username'] = $datos['user'];
                  $_SESSION['rol']=$datos['rol']; 
                  return "index.php";
                }
                else
                  return array("No se ha podido crear el usuario");
              }
           }
           
       }
    }
    }

?>