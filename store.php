<?php
require_once('includes/bootup.php');
require_once('includes/validation.php');
?>
<!DOCTYPE html>
<html lang="es" dir="ltr">

<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="css/master.css?v=<?php echo (rand()); ?>">
  <link rel="stylesheet" type="text/css" href="css/estilo_tienda.css?v=<?php echo (rand()); ?>">
  <script src="https://kit.fontawesome.com/0afaf0fad2.js" crossorigin="anonymous"></script>
  <script type="text/javascript" src="js/store/slider.js"></script>
  <title>Baguettes of Iron - Tienda</title>
</head>

<body>
  <?php
  include_once('includes/comun/header.php');

  //query de extraccion de datos
  use es\fdi\ucm\aw\Producto;

  $productos = Producto::show();
  ?>


  <!-- Slideshow container -->
  <div class="slideshow-container">
    <!-- Full-width images with number -->
    <div class="mySlides fade">
      <div class="numbertext">1 / 5</div>
      <img src="img/store/photo1.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">2 / 5</div>
      <img src="img/store/photo2.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">3 / 5</div>
      <img src="img/store/photo3.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">4 / 5</div>
      <img src="img/store/photo4.jpg" style="width:100%">
    </div>

    <div class="mySlides fade">
      <div class="numbertext">5 / 5</div>
      <img src="img/store/photo5.jpg" style="width:100%">
    </div>
  </div>
  <br>
  <script>
    showSlides(slideIndex);
  </script>

  <!-- grid 
      
        <button><a href="insert.php" style="text-decoration:none;">Insertar</button>
      -->
  <h2>PRODUCTOS:</h2>
  <div class="btnContainer" id="myBtnContainer">
    <button class="btn active" onclick="filterSelection('all')"> Todos</button>
    <button class="btn" onclick="filterSelection('1')"> Ropa</button>
    <button class="btn" onclick="filterSelection('2')"> Gorras</button>
    <button class="btn" onclick="filterSelection('3')"> Otros</button>

    <?php
    if ($_SESSION['rol'] == 1) {
    ?>
      <button class="btn" style="background-color:skyblue"><a href="insert.php" style="text-decoration:none"> Añadir Producto</a></button>
    <?php
    }
    ?>
  </div>
  <script type="text/javascript" src="js/store/products.js"></script>
  <!-- Portfolio Gallery Grid -->
  <div id="store">


    <div class="row">
      <?php
      foreach ($productos as $producto) {
      ?>
        <div class="column <?php echo $producto['id_tipo']; ?>">
          <div class="content">
            <img src="<?php echo $producto['image']; ?>" alt="Gafas" style="width:100%">
            <h4><?php echo $producto['name']; ?></h4>
            <p><?php echo $producto['description']; ?></p>
          </div>
        </div>

      <?php } ?>
    </div>
    <!-- <div class="column 1">
          <div class="content">
            <img src="img/store/camiseta.png" alt="Camiseta" style="width:100%">
            <h4>Camiseta BI</h4>
            <p>Camiseta clasica con nuestro logo.</p>
          </div>
      </div>
      <div class="column 1">
          <div class="content">
            <img src="img/store/pantalon.png" alt="Pantalon" style="width:100%">
            <h4>Pantalon BI</h4>
            <p>Pantalon vaquero con nuestro logo.</p>
          </div>
      </div>
      <div class="column 1">
          <div class="content">
            <img src="img/store/chaqueta.png" alt="Chaqueta" style="width:100%">
            <h4>Chaqueta BI</h4>
            <p>Chaqueta verde con nuestro logo.</p>
          </div>
      </div>

      <div class="column 2">
          <div class="content">
            <img src="img/store/gorra1.png" alt="Gorra" style="width:100%">
            <h4>Gorra negra</h4>
            <p>Gorra negra con nuestro logo.</p>
          </div>
      </div>
      <div class="column 2">
          <div class="content">
            <img src="img/store/gorra2.png" alt="Gorra 2" style="width:100%">
            <h4>Gorra marron</h4>
            <p>Gorra marron con nuestro logo.</p>
          </div>
      </div>

      <div class="column 3">
          <div class="content">
            <img src="img/store/gafas.png" alt="Gafas" style="width:100%">
            <h4>Gafas</h4>
            <p>Gafas sin cristal con nuestro logo.</p>
          </div>
      </div> -->

    <script>
      filterSelection("all");
    </script>

    <!-- END GRID -->
  </div>
</body>

</html>