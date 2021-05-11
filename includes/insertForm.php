<?php
  namespace es\fdi\ucm\aw;

    class InsertForm extends Form
    {
     
      public function generaCamposFormulario($datosIniciales){
            return '<form>

            <div class = "formulario">

                <div class="contenido">
                  <label for="name">Name:</label>
                  <input id ="name" type="text" name = "name" placeholder = "name">
                </div>
            
                <div class="contenido">
                  <label for="description">Description:</label>
                  <input id ="description" type="text" name = "description" placeholder = "Description">
                </div>
                <div class="contenido">
                  <label for="type">Type:</label>
                  <select name="select">
                    <option value="1">Ropa</option>
                    <option value="2" selected> Gorra</option>
                    <option value="3"> Others</option>
                  </select>
                </div>
                <div class="contenido">
                  <label for="image">Archivos</label>
                  <input type="file"  id="image" name="image"  multiple>
                </div>
                <input class="btn" type="submit" value="Insert"></button>
            </div>
        </form>';
        }

        public function procesaFormulario($datos){
          $dir = "img/";
          $nombreArchivo=$dir.basename($_FILES["image"]["name"]);
          $uploadOk = 1;
          $imageFileType = strtolower(pathinfo($nombreArchivo,PATHINFO_EXTENSION));
          if(isset($_POST["submit"])){
            $check= getimagessize($_FILES["image"]["tmp_name"]);
          }
          if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
              echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
              $uploadOk = 0;
          }
          if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
          // if everything is ok, try to upload file
          } else {
              if (move_uploaded_file($_FILES["image"]["tmp_name"], $nombreArchivo)) {
                echo "The file ". htmlspecialchars( basename( $_FILES["image"]["name"])). " has been uploaded.";
              } else {
                echo "Sorry, there was an error uploading your file.";
              }
          }
          Producto::creaProducto($datos['name'],$datos['description'],$nombreArchivo,$datos['select']);
          return "index.php";  
       }
    }

?>